<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Brand;
use App\Category;
use App\Image;
use App\Question;
use App\Showcase;
use App\Stock;
use Illuminate\Http\Request;
use App\Product;
use App\Review;
use ArrayObject;
use Carbon\Carbon;

class FrontEndController extends Controller
{

    public function home(){
        $newProducts = new ArrayObject();
        $newProducts->append(Product::newProducts(0));
        $newProducts->append(Product::newProducts(1));
        $newProducts->append(Product::newProducts(2));
        $newProducts->append(Product::newProducts(5));
        $newProducts->append(Product::newProducts(6));
        $topSelling = new ArrayObject();
        $topSelling->append(Product::topSelling(0));
        $topSelling->append(Product::topSelling(1));
        $topSelling->append(Product::topSelling(2));
        $topSelling->append(Product::topSelling(5));
        $topSelling->append(Product::topSelling(6));
        $showcases = Showcase::all();
        return view('pages.home')->with('path', 'home')
            ->with('newProducts', $newProducts)->with('topSelling', $topSelling)
            ->with('showcases', $showcases);
    }

    public function page(Request $request){
        $path = 'pages.'.($request->path());
        return view($path)->with('path', $request->path());
    }

    public static function product(Request $request, $id){
        $path = 'pages.product';
        $product = Product::productWhere($id);
        $images = Image::imagesWhere($id);
        $reviews = Review::reviewsWhere($id)->paginate(3,['*'], 'reviewPag');
        $productCategories= Category::categoryProductWhere($product->id);
        $productSizes= Stock::sizeStockWhere($product->id);
        if(!empty($productSizes[0])) {
            $colors = Stock::colorStockWhere($product->id, $productSizes[0]->size);
        } else {
            $colors = null;
        }
        $questions = Question::questionsWhere($id);
        $answers = new ArrayObject();
        foreach ($questions as $question){
            $answers->append( Answer::answersWhere($question->id));
        }

        if ($request->ajax()) {
            if(!empty($request->questionPag)){
               return[
                    'question'=> view('partials.product.question')->with(compact('questions'))
                       ->with(compact('answers'))->render(),
                ];
            }
            if(!empty($request->reviewPag)){
                return[
                    'review'=> view('partials.product.review')->with(compact('reviews'))->render(),
                ];
            }
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
        $now=Carbon::now();
        $related = Product::topSelling($productCategories[0]->id);

        return view($path)->with('path', $request->path())->with('product', $product)->with('productCategories',$productCategories)
            ->with('images', $images)->with(compact('reviews'))->with('related', $related)->with('now',$now)
            ->with('questions',$questions)->with('answers',$answers)->with('n',$n)->with('totRating', sizeof($ratings))
            ->with('productSizes', $productSizes)->with('colors',$colors)
            ->render();
    }

    public static function sizeColor(Request $request){
        $colors=Stock::colorStockWhere($request->p,$request->s);
        return view('partials.product.color')->with('colors', $colors);
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

    public static function hotDeal(Request $request, $id){
        $path = 'pages.hotDeal-shop';
        $brands=Brand::all();
        $products=Product::productsWhereHotDeal($request,$id);
        $productsCategories = new ArrayObject();
        $showcase = Showcase::showcaseWhere($id);
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
            ->with(compact('products'))->with('path', $request->path())->with('showcase',$showcase)
            ->with('key',0)->with('now',$now)->render();
    }

    public static function addReview(Request $request){
        $request->validate([
            'review' => ['required', 'string', 'max:2000'],
            'rating' => ['required'],
        ]);
        Review::reviewInsert($request);
        return redirect(url()->previous());
    }

    public static function addQuestion(Request $request){
        $request->validate([
            'question' => ['required', 'string', 'max:2000'],
        ]);
        Question::questionInsert($request);
        return redirect(url()->previous());
    }

    public static function addAnswer(Request $request){
        $request->validate([
            'answer' => ['required', 'string', 'max:2000'],
        ]);
        Answer::answerInsert($request);
        return redirect(url()->previous());
    }
}
