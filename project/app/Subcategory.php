<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public static function subcategoriesWhere($id){
        return Subcategory::where('category_id', $id)->get();
    }
}
