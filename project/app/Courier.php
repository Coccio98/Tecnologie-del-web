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
}
