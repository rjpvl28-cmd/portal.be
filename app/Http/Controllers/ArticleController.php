<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        return Article::select([
            'id',
            'title',
            'img',
        ])->get();
    }

    public function show(Article $article) {
        return $article;
    }
}
