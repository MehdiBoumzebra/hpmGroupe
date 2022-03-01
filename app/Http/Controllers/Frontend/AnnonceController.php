<?php

namespace App\Http\Controllers\Frontend;

use App\Annonce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnnonceController extends Controller
{
    public function index()
    {
        return view('frontend.annonce.index');
    }
}
