<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    function about()
    {
        $name = 'Lydon <span style="color: red;">Wen</span>';

//      return view('pages.about')->with('name',$name);
//      return view('pages.about', compact('name'));
//       return view('pages.about')->with([
//          'first'=>'Lyndon',
//          'last'=>'Wen'
//        ]);

//        $data = [];
//        $data['first'] = 'Lydon';
//        $data['last'] = 'Wen';
//        return view('pages.about',$data);
        $first = 'Lyndon';
        $last = 'Wen';
        return view('pages.about', compact('first','last'));
    }

}
