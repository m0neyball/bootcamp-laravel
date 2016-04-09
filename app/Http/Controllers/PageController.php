<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function about()
    {
        $name = 'fox hsiao';

        return view('pages.about', compact('name'));
    }
    //
}
