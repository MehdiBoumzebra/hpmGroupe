<?php

namespace App\Widgets;

use App\Marque;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class MarqueDimmer extends BaseDimmer
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
        $count =  Marque::count();
        $string = 'Marques';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-tag',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.marque_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.marque_link_text'),
                'link' => route('voyager.marques.index'),
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
        return Auth::user()->can('browse', app(Marque::class));
    }
}