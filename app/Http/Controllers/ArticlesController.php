<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Auth;
use Carbon\Carbon;
//use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['only'=>'create']);
    }
    /**
     * article index
     *
     * @return mixed
     */
    public function index()
    {
//        $articles = Article::latest('published_at')->get();
//        $articles = Article::latest('published_at')->where('published_at','<=', Carbon::now())->get();
        $articles = Article::latest('published_at')->published()->get();
        
        return view('articles.index',compact('articles'));
    }

    /**
     * show article
     *
     * @param $article
     *
     * @return mixed
     */
    public function show(Article $article)
    {
//        dd($id);

//        $article = Article::findOrFail($id);
//        dd($article->updated_at->addDays(8)->diffForHumans());
//        dd($article->published_at);
        return view('articles.show',compact('article'));
    }


    /**
     * create new article.
     *
     * @return mixed
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * save new article.
     *
     * @param CreateArticleRequest $request
     *
     * @return mixed
     */
    public function store(ArticleRequest $request)
    {
//        $this->validate($request, ['title' => 'required|min:3', 'body' => 'required', 'published_at' => 'required|date']);

//        Article::create($request->all());
        $article = new Article($request->all());
//        Auth::user()->articles()->save($article);
        Auth::user()->articles()->create($request->all());
        flash('You are now logged in');
//        flash()->overlay('Your article has been successfully created','Good Job');
        return redirect('articles')->with('flash_message');
    }

    public function edit(Article $article)
    {
//        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    public function update(Article $article, ArticleRequest $request)
    {
//        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }
}
