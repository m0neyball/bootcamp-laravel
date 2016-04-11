<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
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
     * @param ArticleRequest $request
     *
     * @return mixed
     */
    public function store(ArticleRequest $request)
    {
        Article::create($request->all());

        return redirect('articles');
    }

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function edit(int $id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    /**
     * @param int            $id
     * @param ArticleRequest $request
     *
     * @return mixed
     */
    public function update(int $id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }
}
