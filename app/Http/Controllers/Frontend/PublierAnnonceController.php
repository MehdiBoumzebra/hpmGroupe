<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PublierAnnonceController extends Controller
{
    public function index()
    {
        return view('frontend.publier-annonce.index');
    }
}
