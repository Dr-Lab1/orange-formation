<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //

    public function index () {

        $articles = Article::all();

        return view('app.articles', compact('articles'));

    }

    public function article($id) {

        $article = Article::find($id);

        return view('app.article', compact('article'));
        

    }

    public function store(Request $request) {

        $request->validate([
            'title' => ['required'],
            'slug' => ['required'],
            'content' => ['required']
        ]);

        Article::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content
        ]);

        return redirect()->route('articles');
    }
}
