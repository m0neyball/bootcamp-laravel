<?php


namespace App\Http\ViewComposers;

use App\Article;
use Illuminate\Contracts\View\View;

class NavigationComposer
{
    public function __construct()
    {

    }

    public function compose(View $view)
    {
        $view->with('latest', Article::latest()->first());
    }
}