<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Tag;

class TagsController extends Controller
{
  public function show(Tag $tag)
  {
    $articles = $tag->articles;

    return view('articles.index', compact('articles'));
  }
}
