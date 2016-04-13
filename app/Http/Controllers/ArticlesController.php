<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;
//use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

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
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
//        dd($article->updated_at->addDays(8)->diffForHumans());
        dd($article->published_at);
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
    public function store(CreateArticleRequest $request)
    {

        Article::create($request->all());

        return redirect('articles');
    }
}
