<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = true;

    public static function productWhere($productId){
        return Product::where('products.id', $productId)->first();
    }
}
