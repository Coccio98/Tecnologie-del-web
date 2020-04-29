<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public $timestamps = true;

    public static function sizeStockWhere($productId){
        return Stock::join('products','stocks.product_Id','=','products.id')->where('products.id', $productId)
            ->select('stocks.size')->distinct()->get();
    }

    public static function colorStockWhere($productId,$sizeName){
        return Stock::join('products','stocks.product_Id','=','products.id')->where('products.id', $productId)
            ->where('stocks.size', $sizeName)->select('stocks.color')->distinct()->get();
    }
}
