<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class CrudControllerr extends Controller
{
    public function liste_article()
    {
        $articles = Article::all();
        return view('articles.liste', compact(('articles')));
    }
}
