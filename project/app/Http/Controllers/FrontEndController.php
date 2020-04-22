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
        $topSelling = Product::topSellingLaptop();
        return view('pages.home')->with('path', 'home')->with('newLaptop', $newLaptop)->with('topSelling', $topSelling);
    }

    public function page(Request $request){
        $path = 'pages.'.($request->path());
        return view($path)->with('path', $request->path());
    }

    public static function product(Request $request, $id){
        $path = 'pages.product';
        $product = Product::productWhere($id);
        $images = Image::imagesWhere($id);
        $reviews = Review::reviewsWhere($id)->paginate(3);
        $productCategories= Category::categoryProductWhere($product->id);

        if ($request->ajax()) {
            return[
                'review'=> view('partials.product.review')->with(compact('reviews'))->render(),
            ];
        }
        $ratings = Review::reviewsWhere($id)->get();
        $n = array(0,0,0,0,0);
        foreach ($ratings as $rating){
            switch ($rating->rating){
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

        return view($path)->with('path', $request->path())->with('product', $product)->with('productCategories',$productCategories)
            ->with('images', $images)->with(compact('reviews'))
            ->with('questions',$questions)->with('answers',$answers)->with('n',$n)->with('totRating', sizeof($ratings))->render();
    }


    public static function store(Request $request){
        $path = 'pages.store';
        $brands=Brand::all();
        $products=Product::productsWhere($request);
        $productsCategories = new ArrayObject();
        foreach ($products as $product){
            $productsCategories->append( Category::categoryProductWhere($product->id));
        }
        $now=Carbon::now();
        if ($request->ajax()) {
            return[
                'store'=> view('partials.store.store-section')->with(compact('products'))
                    ->with(compact('productsCategories'))->with('now',$now)->render(),
            ];
        }
        return view($path)->with('brands', $brands)->with(compact('productsCategories'))
            ->with(compact('products'))->with('path', $request->path())->with('now',$now)->render();
    }

    public static function addReview(Request $request){
        $request->validate([
            'review' => ['required', 'string', 'max:2000'],
            'rating' => ['required'],
        ]);
        Review::reviewInsert($request);
        return redirect(url()->previous());
    }
}
