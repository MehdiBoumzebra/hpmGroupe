<?php

namespace App\Http\Controllers\Frontend;

use App\Botique;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BotiqueController extends Controller
{
    public function index()
    {
        return view('frontend.botique.index');
    }

    public function detailProduits() {
        return view('frontend.botique.details');
    }
}
