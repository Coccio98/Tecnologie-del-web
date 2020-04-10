<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use App\Product;
use App\Review;

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
        $reviews = Review::reviewWhere($id);
        $score = 0;
        foreach ($reviews as $review){
            $score += $review->rating;
        }
        $score /= sizeof($reviews);

        return view($path)->with('path', $request->path())->with('product', $product)
            ->with('images', $images)->with('review', $reviews)->with('score',$score);
    }
}
