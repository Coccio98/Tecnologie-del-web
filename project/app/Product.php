<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public $timestamps = true;

    public static function productsWhere(){
        return Product::leftJoin('images','images.product_id','=','products.id')
            ->where(function ($query) {
                $query->where('images.main', true)
                    ->orWhereNull('images.image');})
            ->select('products.*', 'images.image')->get();
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

    public static function newProductLaptop(){
        return Product::join('belong', 'belong.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'belong.category_id')
            ->leftJoin('images','images.product_id','=','products.id')
            ->where(function ($query) {
                $query->where('images.main', true)
                    ->orWhereNull('images.image');})
            ->where('categories.name', 'Laptop')
            ->orderByDesc('products.created_at')->orderByDesc('products.id')
            ->select('products.*', 'images.image')
            ->take(6)
            ->get();
    }
}
