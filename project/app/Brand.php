<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = true;

    public function countByBrand($request){
        $products = Product::productsWhereStandard($request);
        return $products->where('products.brand_id',$this->id)->select('products.id')->distinct()->count();
    }
    public function countByBrandHotDeal($request,$id){
        $products = Product::productsWhereStandard($request);
        $products->join('display','display.product_id','=','products.id')
            ->join('showcases','display.showcase_id','=','showcases.id')
            ->where('showcases.id',$id);
        return $products->where('products.brand_id',$this->id)->select('products.id')->distinct()->count();
    }
}
