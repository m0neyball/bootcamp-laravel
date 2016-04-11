<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();

        return view('articles.index', compact('articles'));
    }

    public function show(int $id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        Article::create(Request::all());

        return redirect('articles');
    }
}
