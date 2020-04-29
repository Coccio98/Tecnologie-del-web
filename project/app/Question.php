<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = true;

    public static function questionsWhere($productId){
        return Question::where('product_id', $productId)->join('users', 'users.id', "=", "user_id")
            ->select('questions.*','users.name')->paginate(3,['*'], 'questionPag') ;
    }

    public static function questionInsert($request){
        return Question::insert(['product_id' => $request->productId,
            'user_id' => $request->user()->id,
            'text'=>$request->question]);
    }
}
