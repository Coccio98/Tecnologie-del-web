<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Stock extends Model
{
    public $timestamps = true;

    public static function sizeStockWhere($productId){
        return Stock::where('stocks.product_id', $productId)
            ->select('stocks.size')->distinct()->get();
    }

    public static function colorStockWhere($productId,$sizeName){
        return Stock::where('stocks.product_id', $productId)
            ->where('stocks.size', $sizeName)->select('stocks.color')->distinct()->get();
    }

    public static function stockWhere($productId,$sizeName,$colorName){
        return Stock::where('stocks.product_id', $productId)
            ->where('stocks.size', $sizeName)
            ->where('stocks.color', $colorName)->select('stocks.id')->first();
    }

    public static function productsCartDelete($userId,$stockId){
        return DB::table('cart')->where('user_id',$userId)
            ->where('stock_id',$stockId)->delete();
    }

    public static function productCartUpdateOrInsert($stockId,$userId,$quantity){
        return DB::table('cart')->updateOrInsert(
            ['user_id'=> $userId, 'stock_id'=> $stockId],
            ['quantity'=>$quantity]
        );
    }

    public static function updateCartQuantity($stockId,$quantity){
        return DB::table('cart')->where('stock_id',$stockId)->increment('quantity',$quantity);
    }
}
