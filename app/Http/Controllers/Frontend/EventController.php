<?php

namespace App\Http\Controllers\Frontend;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        return view('frontend.event.index');
    }
}
