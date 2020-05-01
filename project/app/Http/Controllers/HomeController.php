<?php

namespace App\Http\Controllers;

use App\Address;
use App\Coupon;
use App\Order;
use App\PaymentMethod;
use App\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function addOrder(Request $request){
        $request->validate([
            'address' => ['required'],
            'payment' => ['required'],
            'total' => ['required'],
            'privacy' => ['required'],
        ]);
        Order::orderUpdateOrInsert($request);
        return redirect('myorder');
    }

    public function checkout(Request $request){
        $path = 'pages.checkout';
        $address = Address::addressesWhere($request->user()->id);
        $payment = PaymentMethod::paymentMethodsWhere($request->user()->id);
        $coupons = Coupon::couponsUserWhere($request->user()->id);
        $subtotal = (new Product())->subtotal();
        foreach ($coupons as $coupon){
            $subtotal *= ((100-$coupon->amount)/100);
        }
        return view($path)->with('addresses',$address)->with('payments',$payment)
            ->with('coupons',$coupons)->with('total',$subtotal);
    }

    public function updateCartQuantity($productId,$quantity){
        DB::table('cart')->where('product_id',$productId)->increment('quantity',$quantity);
        return redirect('cart')->with('success','Quantity updated');
    }

    public function applyCoupon(Request $request){
        $couponDetails = Coupon::couponWhere($request);
        if(empty($couponDetails)){
            return redirect()->back()->with('error','This coupon does not exist!');
        }

        //coupon inactive
        if(!$couponDetails->status){
            return redirect()->back()->with('error','This coupon is not active');
        }

        //coupon expired
         $expiry_date = $couponDetails->expiry_date;
         $current_date = date('Y-m-d');
         if($expiry_date < $current_date){
             return redirect()->back()->with('error','This coupon is expired!');
         }

         $couponUser= Coupon::couponUserWhere($request);

         if(!empty($couponUser)){
             return redirect()->back()->with('error','This coupon is already redeemed!');
         }

         Coupon::redeem($request->user()->id,$couponDetails->id);

         return redirect()->back()->with('success','Coupon code successfully applied');
    }

}

