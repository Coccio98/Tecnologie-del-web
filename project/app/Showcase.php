<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class Showcase extends Model
{
    public $timestamps = true;

    public static function showcaseWhere($id){
        return Showcase::where('id', $id)->first();
    }

    public static function showcaseUpdateOrInsert($request, $id, $name){
        return Showcase::updateOrInsert(
            ['id'=> $id],
            ['banner'=> 'images/'.$name,
                'title'=>$request->title,
                'subtitle'=>$request->subtitle,
                'expire'=>$request->expire]
        );
    }
    public static function showcaseUpdateOrInsertNoBanner($request, $id){
        return Showcase::updateOrInsert(
            ['id'=> $id],
            ['title'=>$request->title,
                'subtitle'=>$request->subtitle,
                'expire'=>$request->expire]
        );
    }
    public static function showcaseDelete( $id){
        return Showcase::where('id', $id)->delete();
    }

    public static function addProductShowcase($request, $id){
        return DB::table('display')->updateOrInsert([
            'showcase_id' => $id,
            'product_id' => $request -> product
        ]);
    }

    public static function deleteProductShowcase($id, $productId){
        return DB::table('display')->where('showcase_id', $id)
            ->where('product_id', $productId)
            ->delete();
    }
}
