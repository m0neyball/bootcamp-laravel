<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Tag;
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
        $tags = Tag::lists('name','id');
        return view('articles.create',compact('tags'));
    }

    /**
     * save new article.
     *
     * @param ArticleRequest $request
     *
     * @return mixed
     */
    public function store(ArticleRequest $request)
    {


        $articles = Auth::user()->articles()->create($request->all());

        $articles->tags()->attach( $request->input('tag_list'));

        flash('You are now logged in');

        return redirect('articles')->with('flash_message');
    }

    public function edit(Article $article)
    {

        $tags =  Tag::lists('name','id');
        return view('articles.edit',compact('article','tags'));
    }

    public function update(Article $article, ArticleRequest $request)
    {

        $article->update($request->all());

        return redirect('articles');
    }
}
