<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\User;
use Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $articles = \Auth::user()->articles()->published()->get();

        return view('articles.index', compact('articles'));
    }

    /**
     * Show article
     *
     * @param Article $article
     *
     * @return mixed
     *
     */
    public function show(Article $article)
    {
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
        \Auth::user()->articles()->create($request->all());
        
        return redirect('articles')->with([
            'flash_message' => 'Your article has been created!',
            'flash_message_important' => true
        ]);
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
     * @param Article        $article
     * @param ArticleRequest $request
     *
     * @return mixed
     */
    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        return redirect('articles');
    }
}
