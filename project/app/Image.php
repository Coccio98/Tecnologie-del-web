<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public static function imagesWhere($productId){
        return Image::where('product_id', $productId)->get();
    }
}
