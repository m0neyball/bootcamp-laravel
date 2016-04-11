<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;
use Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function show(int $id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Save a new article.
     *
     * @param CreateArticleRequest $request
     *
     * @return mixed
     */
    public function store(CreateArticleRequest $request)
    {
        Article::create($request->all());

        return redirect('articles');
    }
}
