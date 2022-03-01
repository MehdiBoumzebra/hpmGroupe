<?php

namespace App\Widgets;

use App\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class ProjectDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count =  Project::count();
        $string = 'Project';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-rum-1',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.project_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.project_link_text'),
                'link' => route('voyager.projects.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Project::class));
    }
}