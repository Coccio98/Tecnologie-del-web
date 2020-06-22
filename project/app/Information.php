<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    public static function informationUpdateOrInsert($request, $id){
        return Information::updateOrInsert(
            ['id'=> $id],
            ['content'=>$request->content]
        );
    }
}
