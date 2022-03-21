<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('article', [
            "title" => 'Halaman Artikel',
            // "name" => "Dyandra Paramitha Widyadhana",
            // "email" => "dyandra@gmail.com",
            "articles" => Article::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function content(Article $article){
        return view('konten', [
            "article" => $article
        ]);
    }
}
