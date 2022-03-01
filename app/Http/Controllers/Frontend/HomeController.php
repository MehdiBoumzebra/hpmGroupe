<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Project;

class HomeController extends Controller
{
    public function home() {
        $projects = Project::orderBy('created_at', 'DESC')->limit(6)->get();
        $categories = Category::orderBy('order', 'ASC')->get();
        return view('welcome', compact('categories', 'projects'));
    }



    public function references() {
        // $projects = Project::orderBy('created_at', 'DESC')->limit(6)->get();
        $projects = Project::orderBy('created_at', 'DESC')->get();
        $categories = Category::orderBy('order', 'ASC')->get();
        return view('frontend.reference.references', compact('categories', 'projects'));
    }
}
