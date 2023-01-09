<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index () {

        $articles = [
            1 =>'formation node.js',
            2 =>'formation php',
            3 =>'formation wordpress'
        ];

        // dd($articles);
        // $articles = [];
        return view('app.articles', compact('articles'));

    }

    public function article($id) {
        $articles = [
            1 =>'formation node.js',
            2 =>'formation php',
            3 =>'formation wordpress'
        ];

        $article = $articles[$id];

        return view('app.article', compact('article'));
        

    }
}
