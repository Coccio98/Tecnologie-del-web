<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = true;

    public static function imagesWhere($productId){
        return Image::where('product_id', $productId)->get();
    }
}
