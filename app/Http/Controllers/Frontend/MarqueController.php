<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Marque;
use Illuminate\Support\Facades\Storage;

class MarqueController extends Controller
{
    public function allMarques() {
        $marques = Marque::whereNotNull('image')->get();
        return view('frontend.marque.marques', compact('marques'));
    }

    public function getProduitsByMarque($slug, Request $request) {
        $filter = true;
        $produits = DB::table('produits')
        ->join('marques as m', 'm.id', '=', 'produits.marque_id')
        ->select('produits.*')
        ->where('m.slug',$slug)
        ->where('produits.status', 'PUBLISHED')
        ->paginate(10);
        $info = Marque::where('slug', $slug)->select('id', 'name', 'slug', 'image')->first();
        $produits->fragment('products')->appends(array_except($request->all(),array('_token')));
        return view('frontend.produit.produits', compact('produits', 'filter', 'info'));
    }

    public function getProduitsByCategoriesMarque(Request $request) {
        $categories = $request->input('categories', []);
        $id_marque = $request->input('id_marque');
        $filter = true;
        $produits = DB::table('produits')
        ->join('marques as m', 'm.id', '=', 'produits.marque_id');
        if(count($categories) > 0)
        $produits = $produits->join('produit_categories as pc', 'pc.produit_id', '=', 'produits.id');
        $produits = $produits->select('produits.*')
        ->where('m.id',$id_marque)
        ->where('produits.status', 'PUBLISHED');
        if(count($categories) > 0)
        $produits = $produits->whereIn('pc.category_id', $categories);
        $produits = $produits->distinct()->paginate(10);

        $info = Marque::where('id', $id_marque)->select('id', 'name', 'slug', 'image')->first();
        $produits->fragment('products')->appends(array_except($request->all(),array('_token')));
        return view('frontend.produit.produits', compact('produits', 'filter', 'info'));
    }
}