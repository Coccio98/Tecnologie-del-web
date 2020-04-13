<?php

namespace App\Http\Controllers;

use App\Image;
use App\Question;
use Illuminate\Http\Request;
use App\Product;
use App\Review;

class FrontEndController extends Controller
{
    public function home(){
        $newLaptop = Product::newProductLaptop();
        return view('pages.home')->with('path', 'home')->with('newLaptop', $newLaptop);
    }

    public function page(Request $request){
        $path = 'pages.'.($request->path());
        return view($path)->with('path', $request->path());
    }

    public static function product(Request $request, $id){
        $path = 'pages.product';
        $product = Product::productWhere($id);
        $images = Image::imagesWhere($id);
        $reviews = Review::reviewsWhere($id);
        $score = 0;
        $n = array(0,0,0,0,0);
        foreach ($reviews as $review){
            $score += $review->rating;
            switch ($review->rating){
                case 1:
                    $n[0] +=1;
                    break;
                case 2:
                    $n[1] +=1;
                    break;
                case 3:
                    $n[2] +=1;
                    break;
                case 4:
                    $n[3] +=1;
                    break;
                case 5:
                    $n[4] +=1;
                    break;
            }

        }
        if(sizeof($reviews)!=0) {
            $score /= sizeof($reviews);
        }
        $questions = Question::questionsWhere($id);

        return view($path)->with('path', $request->path())->with('product', $product)
            ->with('images', $images)->with('reviews', $reviews)->with('score',$score)
            ->with('questions',$questions)->with('n',$n);
    }
}
