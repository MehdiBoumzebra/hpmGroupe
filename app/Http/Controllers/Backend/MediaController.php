<?php

namespace App\Http\Controllers\Backend;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use TCG\Voyager\Events\MediaFileAdded;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    /** @var string */
    private $filesystem;

    /** @var string */
    private $directory = '';

    public function __construct()
    {
        $this->filesystem = config('voyager.storage.disk');
    }


    public function rename(Request $request)
    {
        // Check permission
        $this->authorize('browse_media');

        $folderLocation = $request->folder_location;
        $filename = pathinfo($request->filename);
        $newFilename = pathinfo($request->new_filename);

        $success = false;
        $error = false;

        if (is_array($folderLocation)) {
            $folderLocation = rtrim(implode('/', $folderLocation), '/');
        }

        $location = "{$this->directory}/{$folderLocation}";

        if (!Storage::disk($this->filesystem)->exists("{$location}/{$newFilename['basename']}")) {
            if (Storage::disk($this->filesystem)->move("{$location}/{$filename['basename']}", "{$location}/{$newFilename['basename']}")) {
                if(Storage::disk($this->filesystem)->exists("{$location}/{$filename['filename']}-thumb.{$filename['extension']}"))
                    Storage::disk($this->filesystem)->move("{$location}/{$filename['filename']}-thumb.{$filename['extension']}", "{$location}/{$newFilename['filename']}-thumb.{$newFilename['extension']}");
                $success = true;
            } else {
                $error = __('voyager::media.error_moving');
            }
        } else {
            $error = __('voyager::media.error_may_exist');
        }

        return compact('success', 'error');
    }

    public function upload(Request $request)
    {
        // Check permission
        $this->authorize('browse_media');

        $extension = $request->file->getClientOriginalExtension();
        // $name = Str::replaceLast('.'.$extension, '', $request->file->getClientOriginalName());
        $name = uniqid();
        $details = json_decode($request->get('details') ?? '{}');
        $absolute_path = Storage::disk($this->filesystem)->path($request->upload_path);

        try {
            $realPath = Storage::disk($this->filesystem)->getDriver()->getAdapter()->getPathPrefix();

            if (property_exists($details, 'allowed_mimetypes') && is_array($details->allowed_mimetypes))
                $allowedMimeTypes = $details->allowed_mimetypes;
            else $allowedMimeTypes = config('voyager.media.allowed_mimetypes', '*');

            if ($allowedMimeTypes != '*' && (is_array($allowedMimeTypes) && !in_array($request->file->getMimeType(), $allowedMimeTypes))) {
                throw new Exception(__('voyager::generic.mimetype_not_allowed'));
            }

            if (!$request->has('filename') || $request->get('filename') == 'null') {
                while (Storage::disk($this->filesystem)->exists(Str::finish($request->upload_path, '/').$name.'.'.$extension, $this->filesystem)) {
                    $name = get_file_name($name);
                }
            } else {
                $name = str_replace('{uid}', \Auth::user()->getKey(), $request->get('filename'));
                if (Str::contains($name, '{date:')) {
                    $name = preg_replace_callback('/\{date:([^\/\}]*)\}/', function ($date) {
                        return \Carbon\Carbon::now()->format($date[1]);
                    }, $name);
                }
                if (Str::contains($name, '{random:')) {
                    $name = preg_replace_callback('/\{random:([0-9]+)\}/', function ($random) {
                        return Str::random($random[1]);
                    }, $name);
                }
            }

            $file = $request->file->storeAs($request->upload_path, $name.'.'.$extension, $this->filesystem);

            $imageMimeTypes = [
                'image/jpeg',
                'image/png',
                'image/gif',
                'image/bmp',
                'image/svg+xml',
            ];
            if (in_array($request->file->getMimeType(), $imageMimeTypes)) {
                $image = Image::make($realPath.$file);

                if ($request->file->getClientOriginalExtension() == 'gif') {
                    copy($request->file->getRealPath(), $realPath.$file);
                } else {
                    $image = $image->orientate();
                    // Generate thumbnails
                    if (property_exists($details, 'thumbnails') && is_array($details->thumbnails)) {
                        foreach ($details->thumbnails as $thumbnail_data) {
                            $type = $thumbnail_data->type ?? 'fit';
                            $thumbnail = Image::make(clone $image);
                            if ($type == 'fit') {
                                $thumbnail = $thumbnail->fit(
                                    $thumbnail_data->width,
                                    ($thumbnail_data->height ?? null),
                                    function ($constraint) {
                                        $constraint->aspectRatio();
                                    }, ($thumbnail_data->position ?? 'center')
                                );
                            } elseif ($type == 'crop') {
                                $thumbnail = $thumbnail->crop(
                                    $thumbnail_data->width,
                                    $thumbnail_data->height,
                                    ($thumbnail_data->x ?? null),
                                    ($thumbnail_data->y ?? null)
                                );
                            } elseif ($type == 'resize') {
                                $thumbnail = $thumbnail->resize(
                                    $thumbnail_data->width,
                                    ($thumbnail_data->height ?? null),
                                    function ($constraint) use ($thumbnail_data) {
                                        $constraint->aspectRatio();
                                        if (!($thumbnail_data->upsize ?? true)) {
                                            $constraint->upsize();
                                        }
                                    }
                                );
                            }
                            if (
                                property_exists($details, 'watermark') &&
                                property_exists($details->watermark, 'source') &&
                                property_exists($thumbnail_data, 'watermark') &&
                                $thumbnail_data->watermark
                            ) {
                                $thumbnail = $this->addWatermarkToImage($thumbnail, $details->watermark);
                            }
                            $thumbnail->save($realPath.$request->upload_path.$name.'-'.($thumbnail_data->name ?? 'thumbnail').'.'.$extension, ($details->quality ?? 90));
                        }
                    }
                    // Add watermark to image
                    if (property_exists($details, 'watermark') && property_exists($details->watermark, 'source')) {
                        $image = $this->addWatermarkToImage($image, $details->watermark);
                    }
                    $image->save($realPath.$file, ($details->quality ?? 90));
                }
            }

            $success = true;
            $message = __('voyager::media.success_uploaded_file');
            $path = preg_replace('/^public\//', '', $file);

            event(new MediaFileAdded($path));
        } catch (Exception $e) {
            $success = false;
            $message = $e->getMessage();
            $path = '';
        }

        return response()->json(compact('success', 'message', 'path'));
    }

    public function delete(Request $request)
    {
        // Check permission
        $this->authorize('browse_media');

        $path = str_replace('//', '/', Str::finish($request->path, '/'));
        $success = true;
        $error = '';

        foreach ($request->get('files') as $file) {
            $file_path = $path.$file['name'];

            if ($file['type'] == 'folder') {
                if (!Storage::disk($this->filesystem)->deleteDirectory($file_path)) {
                    $error = __('voyager::media.error_deleting_folder');
                    $success = false;
                }
            } elseif (!Storage::disk($this->filesystem)->delete($file_path)) {
                $error = __('voyager::media.error_deleting_file');
                $success = false;
            }

            if (array_key_exists('thumbnails', $file) && is_array($file['thumbnails'])) {
                foreach($file['thumbnails'] as $thumb) {
                    $file_path_thumb = $path.$thumb['basename'];
                    Storage::disk($this->filesystem)->delete($file_path_thumb);
                }
            }
        }

        return compact('success', 'error');
    }


    private function addWatermarkToImage($image, $options)
    {
        $watermark = Image::make(Storage::disk($this->filesystem)->path($options->source));
        // Resize watermark
        $width = $image->width() * (($options->size ?? 15) / 100);
        $watermark->resize($width, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        return $image->insert(
            $watermark,
            ($options->position ?? 'top-left'),
            ($options->x ?? 0),
            ($options->y ?? 0)
        );
    }
}

