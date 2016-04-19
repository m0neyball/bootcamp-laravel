<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PagesController extends Controller
{
    //
    function about()
    {
//        $people = [
//            'Lior','Lyndon','Ben'
//        ];
        $people = [];

        return view('pages.about', compact('people'));
    }

    function  contact()
    {
        return view('pages.contact');
    }

}
