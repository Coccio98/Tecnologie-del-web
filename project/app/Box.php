<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    public static function boxesWhere()
    {
        return Box::join('categories', 'categories.id','=','boxes.category_id')->select('boxes.*','categories.name')->get();
    }

    public static function boxUpdateOrInsert($request, $id, $name){
        return Box::updateOrInsert(
            ['id'=> $id],
            ['image'=> 'images/'.$name,
                'category_id'=>$request->category]
        );
    }
    public static function boxUpdateOrInsertNoImage($request, $id){
        return Box::updateOrInsert(
            ['id'=> $id],
            ['category_id'=>$request->category]
        );
    }
}
