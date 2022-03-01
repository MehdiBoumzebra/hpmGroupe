<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Project;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function getProjectsByCategory($slug) {
        $filterCategories = true;
        $projects = DB::table('projects')
        ->join('project_categories as pc', 'pc.project_id', '=', 'projects.id')
        ->join('categories as c', 'c.id', '=', 'pc.category_id')
        ->select('projects.*')
        ->where('c.slug',$slug)
        ->where('projects.status', 'PUBLISHED')
        ->paginate(9);
        $info = Category::where('slug', $slug)->first();
        return view('frontend.project.projects', compact('projects','info', 'filterCategories'));
    }

    public function loadMore() {
        $count = Project::count() - 6;
        if($count <= 0) $count = 0;
        $count = 0;
        $projects = Project::orderBy('created_at', 'DESC')->limit($count)->offset(6)->get();
        return view('frontend.project.loadMore', compact('projects', 'count'));
    }

    public function getProjectDetails(Request $request, $lang , $slug) {

        $project = Project::where('slug',$slug)->firstOrFail();
        $id = $project->id;
        $projectImages = array();
        $directory = 'projects/'.$id;

        if(Storage::exists($directory)) {
            $allImages = Storage::allFiles($directory);
            if(count($allImages)) {
                foreach ($allImages as $file) {
                    $file = $this->fileInfo(pathinfo($file));
                    if (!Str::endsWith($file['name'], '-thumb'))
                        $projectImages[] = $file;
                }
            }
        }
        if($request->ajax()){
            return view('frontend.project.ajax-project', compact('project', 'projectImages'));
        }
        return view('frontend.project.projects', compact('project', 'projectImages'));
    }

    public function getCategories($slug) {
        $filterCategories = true;
        $info = Category::where('slug', $slug)->firstOrFail();
        $categories = $info->children;
        return view('frontend.category.categories', compact('categories','info', 'filterCategories'));
    }

    public function fileInfo($filePath)
    {
        $file = array();
        $file['name'] = $filePath['filename'];
        $file['extension'] = $filePath['extension'];
        $file['url'] = 'storage/'.$filePath['dirname'] . '/' . $filePath['basename'];
        $file['thumb_url'] = 'storage/'.$filePath['dirname'] . '/' . $filePath['filename'].'-thumb.'.$filePath['extension'];
        return $file;
    }

    public function searchproject(Request $request) {
        $data = $request->all();
        if($data['search']) {

            $projects = Project::where(function ($query) use ($data) {
                $query->where('reference', 'like', '%'.$data['search'].'%')
                      ->where('status', 'PUBLISHED');
            })->orWhere(function ($query) use ($data) {
                $query->where('title', 'like', '%'.$data['search'].'%')
                      ->where('status', 'PUBLISHED');
            })->paginate(9)->setPath( '' );

            $projects->appends(array_except($data,array('_token')));
            $title = 'Search';
            return view('frontend.project.projects', compact('projects', 'title'));
        }

        return redirect('/');
    }

    public function getProjectsByCategories(Request $request) {
        $categories = $request->input('categories', []);
        $filterCategories = true;
        $projects = DB::table('projects')
        ->join('marques as m', 'm.id', '=', 'projects.marque_id');
        if(count($categories) > 0)
        $projects = $projects->join('project_categories as pc', 'pc.project_id', '=', 'projects.id');
        $projects = $projects->select('projects.*')
        ->where('projects.status', 'PUBLISHED');
        if(count($categories) > 0)
        $projects = $projects->whereIn('pc.category_id', $categories);
        $projects = $projects->distinct()->paginate(10);
        $projects->fragment('projects')->appends(array_except($request->all(),array('_token')));
        return view('frontend.project.projects', compact('projects', 'filterCategories'));
    }
}
