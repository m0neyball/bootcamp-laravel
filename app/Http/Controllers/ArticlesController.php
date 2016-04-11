<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest('published_at')->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $input = $request::all();
        $input['published_at'] = Carbon::now();

        /*
        $article = new Article();
        $article->title = $input['title'];
        */

        Article::create($input);

        return redirect('articles');
    }
}
