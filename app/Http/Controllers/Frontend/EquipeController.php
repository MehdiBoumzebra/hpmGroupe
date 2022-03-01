<?php

namespace App\Http\Controllers\Frontend;

use App\Equipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EquipeController extends Controller
{
    public function index()
    {
        return view('frontend.equipe.index');
    }
}
