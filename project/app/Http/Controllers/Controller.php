<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Subcategory;
use ArrayObject;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        view()->composer('*',function($view) {
            $cart= null;
            $wishlistCount = null;
            $cartCount = 0;
            if(!empty(Auth::user())){
                $cart= Product::productsCartWhere(Auth::user()->id);
                foreach ($cart as $product) {
                    $cartCount += $product->quantity;
                }
                $wishlistCount = sizeof(Product::productsWishlistWhere(Auth::user()->id));
            }

            $categories = Category::all();
            $subcategories = new ArrayObject();
            foreach ($categories as $category){
                $subcategories->append(Subcategory::subcategoriesWhere($category->id));
            }

            $view->with('categories', $categories)->with('subcategories', $subcategories)
                ->with('cart',$cart)->with('wishlistCount', $wishlistCount)->with('cartCount', $cartCount);
        });
    }
}
