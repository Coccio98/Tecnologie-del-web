<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = true;

    public function countByCategory($request){
        $products = Product::productsWhereStandard($request);
        return $products->where('subcategories.category_id',$this->id)
            ->select('products.id')->distinct()->count();
    }

    public function countByCategoryHotDeal($request,$id){
        $products = Product::productsWhereStandard($request);

        $products->join('display','display.product_id','=','products.id')
            ->join('showcases','display.showcase_id','=','showcases.id')
            ->where('showcases.id',$id);

        return $products->where('subcategories.category_id',$this->id)
            ->select('products.id')->distinct()->count();
    }
}
