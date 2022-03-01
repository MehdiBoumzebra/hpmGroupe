<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        return view('frontend.article.index');
    }

    public function detailArticle() {
        return view('frontend.article.detail-article');
    }

    public function articlesByCategorie() {
        return view('frontend.article.articles-categorie');
    }
}
