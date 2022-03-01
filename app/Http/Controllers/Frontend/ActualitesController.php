<?php

namespace App\Http\Controllers\Frontend;

use App\Actualite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActualitesController extends Controller
{
    public function index()
    {
        $data = Actualite::paginate(6);
        return view('frontend.actualite.index', compact('data'));
    }


    public function detailActualite(Request $request, $slug) {
        $actualite = Actualite::where('slug',$slug)->firstOrFail();
        return view('frontend.actualite.details-actualite', compact('actualite'));
    }
}
