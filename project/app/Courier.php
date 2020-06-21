<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    public $timestamps = true;

    public static function courierUpdateOrInsert($request, $id){
        return Courier::updateOrInsert(
            ['id'=> $id],
            ['name'=> $request->name]
        );
    }

    public static function courierDelete( $id){
        Order::where('courier_id',$id)->update(['courier_id'=> 1]);
        return Courier::where('id', $id)->delete();
    }
}
