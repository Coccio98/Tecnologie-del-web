<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Brand;
use App\Category;
use App\Image;
use App\Question;
use Illuminate\Http\Request;
use App\Product;
use App\Review;
use ArrayObject;
use Carbon\Carbon;

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
        $n = array(0,0,0,0,0);
        foreach ($reviews as $review){
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

        $questions = Question::questionsWhere($id);
        $answers = new ArrayObject();
        foreach ($questions as $question){
            $answers->append( Answer::answersWhere($question->id));
        }

        return view($path)->with('path', $request->path())->with('product', $product)
            ->with('images', $images)->with('reviews', $reviews)
            ->with('questions',$questions)->with('answers',$answers)->with('n',$n);
    }

    public static function store(){
        $path = 'pages.store';
        $categories = Category::all();
        $brands=Brand::all();
        $products=Product::productsWhere();
        $now=Carbon::now();
        return view($path)->with('categories', $categories)->with('brands', $brands)
            ->with('products',$products)->with('now',$now);
    }
}
