<?php

namespace App\Http\Controllers\Frontend;

use App\Catalogue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogueController extends Controller
{
    public function index()
    {
        $data = Catalogue::where('file', 'not like', "[]")->whereNotNull('file')->get();
        return view('frontend.catalogue.index', compact('data'));
    }
}
