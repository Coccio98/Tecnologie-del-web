<?php

namespace App\Http\Controllers;

use App\Address;
use App\Box;
use App\Brand;
use App\Category;
use App\Coupon;
use App\Courier;
use App\Image;
use App\Information;
use App\Order;
use App\PaymentMethod;
use App\Product;
use App\Showcase;
use App\Stock;
use App\Subcategory;
use App\User;
use ArrayObject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $path = 'storage/images/';
        $images = collect(File::allFiles($path));
        return view('dashboard')
            ->with('nUsers', User::all()->count())
            ->with('nProducts', Product::all()->count())
            ->with('nStocks', Stock::all()->count())
            ->with('nImages', Image::all()->count())
            ->with('nBrands',  Brand::all()->count())
            ->with('nCategories', Category::all()->count())
            ->with('nSubcategories', Subcategory::all()->count())
            ->with('nCoupons', Coupon::all()->count())
            ->with('nShowcases', Showcase::all()->count())
            ->with('nCouriers', Courier::all()->count())
            ->with('nOrders', Order::all()->count())
            ->with('boxes', Box::join('categories', 'boxes.category_id', '=', 'categories.id')
            ->select('categories.name')
            ->get())
            ->with('nMedia', $images->count());
    }

    public function page(Request $request){
        $path = 'pages.'.($request->path());
        $data = null;
        if($request->path() === 'address'){
            $data =  $this->address($request);
        } elseif($request->path() === 'paymentOptions'){
            $data =  $this->payment($request);
        }
        return view($path)->with('path', $request->path())->with('data', $data);
    }

    private function address($request){
        return $addresses = Address::addressesWhere($request->user()->id);
    }

    private function payment($request){
        return $payment = PaymentMethod::paymentMethodsWhere($request->user()->id);
    }

    public function wishlist(Request $request){
        $path = 'pages.'.($request->path());
        $wishlist = Product::productsWishlistWhere($request->user()->id);

        $productsSizes = new ArrayObject();
        $colors = new ArrayObject();
        $availability = new ArrayObject();
        foreach ($wishlist as $key=>$product) {
            $productsSizes->append(Stock::sizeStockWhere($product->id));
            if (!empty($productsSizes[$key][0])) {
                $colors->append(Stock::colorStockWhere($product->id, $productsSizes[$key][0]->size));
            } else {
                $colors->append(null);
            }
            if(empty($productsSizes[$key][0])|| $colors[$key]==null){
                $availability->append(false);
            } else {
                $firststock=Stock::stockWhere($product->id, $productsSizes[$key][0]->size,$colors[$key][0]->color);
                if($firststock->number == 0) {
                    $availability->append(false);
                } else {
                    $availability->append(true);
                }
            }
        }

        return view($path)->with('path', $request->path())->with('wishlist', $wishlist)
            ->with('productsSizes', $productsSizes)->with('colors', $colors)
            ->with('availability',$availability);
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
        $request->validate([
            'size' => ['required'],
            'color' => ['required'],
            'quantity' => ['required']
        ]);
        $stock=Stock::stockWhere($id,$request->size,$request->color);
        Stock::productCartUpdateOrInsert($stock->id, $request->user()->id,$request->quantity);
        return redirect(url()->previous());
    }

    public function deleteCart(Request $request, $id){
        Stock::productsCartDelete($request->user()->id, $id);
        return redirect('cart');
    }

    public function addOrder(Request $request){
        $request->validate([
            'address' => ['required'],
            'payment' => ['required'],
            'total' => ['required'],
            'privacy' => ['required'],
        ]);
        $cart= Product::productsCartWhere($request->user()->id);
        foreach ($cart as $product) {
            if ($product->number < $product->quantity){
                return redirect()->back()->with('error','Not enough product '.$product->name.' for this size and color');
            }
        }
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

    public function updateCartQuantity($stockId,$quantity){
        Stock::updateCartQuantity($stockId,$quantity);
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

