<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use App\Product;

class FrontEndController extends Controller
{
    public function home(){
        return view('pages.home')->with('path', 'home');
    }

    public function page(Request $request){
        $path = 'pages.'.($request->path());
        return view($path)->with('path', $request->path());
    }

    public static function product(Request $request, $id){
        $path = 'pages.product';
        $product = Product::productWhere($id);
        $images = Image::imagesWhere($id);
        return view($path)->with('path', $request->path())->with('product', $product)->with('images', $images);
    }
}
