<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class NotreMissionController extends Controller
{
    public function index()
    {
        return view('frontend.notre-mission.index');
    }
}
