<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = true;

    public static function categoryProductWhere($productId){
        return Category::join('belong', 'belong.category_id', '=', 'categories.id')
            ->where('belong.product_id',$productId)
            ->select('categories.*')->get();
    }
}
