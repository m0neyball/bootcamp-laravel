<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Tag;
use App\User;
use Auth;
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
        $articles = Auth::user()->articles()->published()->get();

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
        $tags = Tag::lists('name', 'id');

        return view('articles.create', compact('tags'));
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

        $article = Auth::user()->articles()->create($request->all());

        $article->tags()->attach($request->input('tag_list'));

        flash()->overlay('Your article has been successfully created!', 'Good Job');

        return redirect('articles');
    }

    /**
     * Update article
     *
     * @param Article $article
     *
     * @return mixed
     *
     */
    public function edit(Article $article)
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags'));
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

        $article->tags()->sync($request->input('tag_list'));

        return redirect('articles');
    }
}
