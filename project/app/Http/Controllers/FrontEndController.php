<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){
        return view('pages.home')->with('path', 'home');
    }

    public function page(Request $request){
        $path = 'pages.'.($request->path());
        return view($path)->with('path', $request->path());
    }

}
