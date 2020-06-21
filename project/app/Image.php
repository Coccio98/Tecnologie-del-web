<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = true;

    public static function imagesWhere($productId){
        return Image::where('product_id', $productId)->get();
    }

    public static function imageUpdateOrInsert($request, $id, $name){
        $main = (!empty($request->main) ? 1 : 0);
        return Image::updateOrInsert(
            ['id'=> $id],
            ['image'=> 'images/'.$name,
                'main'=>$main,
                'product_id'=>$request->product]
        );
    }
    public static function imageUpdateOrInsertNoImage($request, $id){
        $main = (!empty($request->main) ? 1 : 0);
        return Image::updateOrInsert(
            ['id'=> $id],
            ['main'=>$main,
                'product_id'=>$request->product]
        );
    }
    public static function imageDelete( $id){
        return Image::where('id', $id)->delete();
    }
}
