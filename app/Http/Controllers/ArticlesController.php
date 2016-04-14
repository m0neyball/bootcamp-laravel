<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => [
                'index'
            ]
        ]);
    }

    public function index()
    {
        // get user object json
        // return \Auth::User();
        // get user name
        // return \Auth::User()->name;

        $articles = Article::latest('published_at')
            ->published()
            ->get();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        // $input['published_at'] = Carbon::now();

        /*
        $article = new Article();
        $article->title = $input['title'];
        */

        $this->validate($request, [
            'title' => 'required|min:3',
            'body'  => 'required',
        ]);

        /*
        $request = $request->all();
        $request['user_id'] = Auth::id();
        Article::create($request->all()); // user_id => Auth::User()->id
        */

        // $article = new Article($request->all());

        // get Collection
        // Auth::User()->articles;
        // Auth::User()->articles()->save($article);
        Auth::User()->articles()->create($request->all());

        // \Session::flash('flash_message', 'You article has been created!');
        // $request->session()->flash('flash_message', 'You article has been created...!!!');
        // $request->session()->flash('flash_message_important', true);

        return redirect('articles')->with([
            'flash_message' => 'You article has been created...!!!',
            'flash_message_important' => true
        ]);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        return redirect('articles');
    }
}
