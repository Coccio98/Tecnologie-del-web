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

    public function countByCategory($request){
        $products = Product::productsWhereStandard($request);
        if(empty($request->category) || $request->category == 0){
            $products->join('belong', 'belong.product_id', '=', 'products.id');
        }
        return $products->where('belong.category_id',$this->id)
            ->select('products.id')->distinct()->count();
    }

    public function countByCategoryHotDeal($request,$id){
        $products = Product::productsWhereStandard($request);

        $products->join('display','display.product_id','=','products.id')
            ->join('showcases','display.showcase_id','=','showcases.id')
            ->where('showcases.id',$id);

        if(empty($request->category) || $request->category == 0){
            $products->join('belong', 'belong.product_id', '=', 'products.id');
        }
        return $products->where('belong.category_id',$this->id)
            ->select('products.id')->distinct()->count();
    }
}
