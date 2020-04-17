<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = true;

    public static function reviewsWhere($productId){
        return Review::where('product_id', $productId)->join('users', 'users.id', "=", "user_id");
    }

    public static function reviewInsert($request){
        $totReview = Review::where('product_id',$request->productId)->count();
        $average=Product::where('id',$request->productId)->select('score')->first()->score;
        $average *= $totReview;
        $totReview++;
        $average += $request->rating;
        $average /= $totReview;
        Product::where('id',$request->productId)->update(['score' => $average]);
        return Review::insert(['product_id' => $request->productId,
            'user_id' => $request->user()->id,
            'text'=>$request->review,
            'rating'=>$request->rating]);
    }
}
