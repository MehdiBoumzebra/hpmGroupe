<?php

if (!function_exists('categoriesParent')) {
    function categoriesParent($parent=null)
    {
        return App\Category::where('parent_id', $parent)->orderBy('order', 'asc')->get();
    }
}

if (!function_exists('categoriesByMarque')) {
    function categoriesByMarque($marque, $parent=null)
    {
        $categories = App\Category::join('produit_categories as pc', 'pc.category_id', '=', 'categories.id')
        ->join('produits as p', 'p.id', '=', 'pc.produit_id')
        ->where('categories.parent_id', $parent)
        ->where('p.marque_id', $marque)
        ->where('p.status', 'PUBLISHED')
        ->distinct()
        ->select('categories.id', 'categories.name')
        ->get();
        return $categories;
    }
}

if (!function_exists('getMarques')) {
    function getMarques()
    {
        return App\Marque::select('id', 'image', 'image_white', 'name', 'slug')->whereNotNull('image')->orderBy('order')->get();
    }
}

if (!function_exists('getReferences')) {
    function getReferences()
    {
        return App\Reference::select('id', 'image', 'name')->orderBy('order')->get();
    }
}

if (!function_exists('getLastProduits')) {
    function getLastProduits()
    {
        return App\Produit::orderBy('created_at', 'desc')->where(['status' => 'PUBLISHED', 'nouveaute' => 1])->take(24)->get();
    }
}

if (!function_exists('last_actualites')) {
    function last_actualites()
    {
        return $actualites = App\Actualite::orderBy('created_at', 'desc')->take(4)->get();
    }
}

if (!function_exists('slides')) {
    function slides()
    {
        return App\Slide::orderBy('order')->get();
    }
}

