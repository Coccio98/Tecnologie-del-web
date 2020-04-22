<?php

namespace App\Http\Controllers;

use App\Address;
use App\Order;
use App\PaymentMethod;
use App\Product;
use App\User;
use ArrayObject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function page(Request $request){
        $path = 'pages.'.($request->path());
        $data = null;
        if($request->path() === 'address'){
            $data =  $this->address($request);
        } elseif($request->path() === 'paymentOptions'){
            $data =  $this->payment($request);
        } elseif($request->path() === 'wishlist'){
            $data =  $this->wishlist($request);
        }
        return view($path)->with('path', $request->path())->with('data', $data);
    }

    private function address($request){
        return $addresses = Address::addressesWhere($request->user()->id);
    }

    private function payment($request){
        return $payment = PaymentMethod::paymentMethodsWhere($request->user()->id);
    }
    private function wishlist($request){
        return $wishlist = Product::productsWishlistWhere($request->user()->id);
    }

    public function addWishlist(Request $request, $id){
        Product::productWishlistUpdateOrInsert($id, $request->user()->id);
        return redirect(url()->previous());
    }

    public function deleteWishlist(Request $request, $id){
         Product::productsWishlistDelete($request->user()->id, $id);
         return redirect('wishlist');
    }

    public function addToCart(Request $request, $id){
        Product::productCartUpdateOrInsert($id, $request->user()->id);
        return redirect(url()->previous());
    }

    public function deleteCart(Request $request, $id){
        Product::productsCartDelete($request->user()->id, $id);
        return redirect('cart');
    }

}

