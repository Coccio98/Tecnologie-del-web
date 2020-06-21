<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public static function subcategoriesWhere($id){
        return Subcategory::where('category_id', $id)->get();
    }

    public static function subcategoryUpdateOrInsert($request, $id){
        return Subcategory::updateOrInsert(
            ['id'=> $id],
            ['name'=> $request->name,
                'category_id'=>$request->category]
        );
    }
}
