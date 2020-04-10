<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = true;

    public static function reviewWhere($productId){
        return Review::where('product_id', $productId)->get() ;
    }
}
