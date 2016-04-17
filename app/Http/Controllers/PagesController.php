<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function about()
    {
        $name = '<span style="color: red;">B</span>en';

        $people = [
            'Sherry',
            'Jack',
            'Mary',
        ];

        // return view('pages.about')->with('name', $name);

        /*
        return view('pages.about')->with([
            'name'     => $name,
            'birthday' => '19880925',
        ]);
        */

        /*
        $data = [];
        $data[ 'name' ] = $name;
        $data[ 'birthday' ] = '19880925';

        return view('pages.about', $data);
        */

        $birthday = '19880925';

        return view('pages.about', compact('name', 'birthday', 'people'));
    }
}
