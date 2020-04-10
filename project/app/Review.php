<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = true;

    public static function reviewsWhere($productId){
        return Review::where('product_id', $productId)->join('users', 'users.id', "=", "user_id")->get() ;
    }
}
