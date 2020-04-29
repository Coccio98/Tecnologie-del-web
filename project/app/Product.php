<?php

namespace App;

use ArrayObject;
use http\Client\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public $timestamps = true;

    public static function productsWhere($request){
        $products = Product::productsWhereStandard($request);
        if(empty($request->show) || $request->show == 0) {
            return $products->select('products.*', 'images.image')->paginate(9);
        } elseif ($request->show == 1){
            return $products->select('products.*', 'images.image')->paginate(18);
        } else{
            return $products->select('products.*', 'images.image')->paginate(27);
        }
    }
    public static function productsWhereHotDeal($request, $id){
        $products = Product::productsWhereStandard($request);
        $products->join('display','display.product_id','=','products.id')
            ->join('showcases','display.showcase_id','=','showcases.id')
            ->where('showcases.id',$id);
        if(empty($request->show) || $request->show == 0) {
            return $products->select('products.*', 'images.image')->paginate(9);
        } elseif ($request->show == 1){
            return $products->select('products.*', 'images.image')->paginate(18);
        } else{
            return $products->select('products.*', 'images.image')->paginate(27);
        }
    }

    public static function productsWhereStandard($request){
        $products=Product::leftJoin('images','images.product_id','=','products.id')
            ->where(function ($query) {
                $query->where('images.main', true)
                    ->orWhereNull('images.image');})
            ->where('products.name','like','%'.$request->search.'%');
        if(!empty($request->category) && $request->category != 0){
            $products->join('belong', 'belong.product_id', '=', 'products.id')
                ->where('belong.category_id',$request->category);

        }
        if(!empty($request->brand) && $request->brand != 0){
            $products->where('products.brand_id',$request->brand);
        }
        if(!empty($request->max) && $request->max != 0){
            $products->whereRaw('(products.price*(100-products.sale)/100) <= ?',$request->max);
        }
        if(!empty($request->min) && $request->min != 0){
            $products->whereRaw('(products.price*(100-products.sale)/100) >= ?',$request->min);
        }
        if(empty($request->sort) || $request->sort == 0){
            $products->orderByDesc('products.selling_number');
        } else {
            $products->orderBy('products.id');
        }
        return $products;
    }

    public static function productWhere($productId){
        return Product::where('products.id', $productId)->first();
    }

    public static function productsWishlistWhere($userId){
        return Product::join('wishlist', 'wishlist.product_id', '=', 'products.id')
            ->join('users','users.id','=','wishlist.user_id')->where('users.id',$userId)
            ->leftJoin('images','images.product_id','=','products.id')
            ->where(function ($query) {
                $query->where('images.main', true)
                    ->orWhereNull('images.image');})
            ->select('products.*', 'images.image')->orderBy('wishlist.id')->get();
    }

    public static function productsWishlistDelete($userId,$productId){
        return DB::table('wishlist')->where('user_id',$userId)
            ->where('product_id',$productId)->delete();
    }

    public static function productWishlistUpdateOrInsert($productId,$userId){
        return DB::table('wishlist')->updateOrInsert(
            ['user_id'=> $userId, 'product_id' =>$productId]
        );
    }

    public static function productsCartWhere($userId){
        return Product::join('cart', 'cart.product_id', '=', 'products.id')
            ->join('users','users.id','=','cart.user_id')->where('users.id',$userId)
            ->leftJoin('images','images.product_id','=','products.id')
            ->where(function ($query) {
                $query->where('images.main', true)
                    ->orWhereNull('images.image');})
            ->select('products.*', 'images.image','cart.quantity')->orderBy('cart.id')->get();
    }

    public static function productsCartDelete($userId,$productId){
        return DB::table('cart')->where('user_id',$userId)
            ->where('product_id',$productId)->delete();
    }

    public static function productCartUpdateOrInsert($productId,$userId){
        return DB::table('cart')->updateOrInsert(
            ['user_id'=> $userId, 'product_id' =>$productId]
        );
    }


    public static function orderProductWhere($orderId){
        return Product::leftJoin('images','images.product_id','=','products.id')
            ->where(function ($query) {
                $query->where('images.main', true)
                    ->orWhereNull('images.image');})
            ->join('compose', 'products.id', '=', "compose.product_id")
            ->where("compose.order_id",$orderId)
            ->select('products.*','images.image','compose.price_stamp', 'compose.quantity')->get();
    }

    public static function topSelling($category)
    {
        $products= Product::join('belong', 'belong.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'belong.category_id')
            ->leftJoin('images', 'images.product_id', '=', 'products.id')
            ->where(function ($query) {
                $query->where('images.main', true)
                    ->orWhereNull('images.image');
            })
            ->orderByDesc('products.selling_number');
        if(!empty($category) && $category !=0) {
            $products->where('categories.id', $category);
        }
        return $products->select('products.*', 'images.image')
            ->take(6)
            ->get();
    }
    public static function newProducts($category){
        $products= Product::join('belong', 'belong.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'belong.category_id')
            ->leftJoin('images','images.product_id','=','products.id')
            ->where(function ($query) {
                $query->where('images.main', true)
                    ->orWhereNull('images.image');});
            if(!empty($category) && $category !=0) {
                $products->where('categories.id', $category);
            }
           return $products->orderByDesc('products.created_at')->orderByDesc('products.id')
            ->select('products.*', 'images.image')
            ->take(6)
            ->get();
    }

    public function subtotal(){
        $cart = Product::productsCartWhere(Auth::user()->id);
        $total =0;
        foreach ($cart as $item){
            $total+=($item->price*((100-$item->sale)/100) * $item->quantity);
        }
        return $total;
    }

}
