<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    public $timestamps = true;

    public static function showcaseWhere($id){
        return Showcase::where('id', $id)->first();
    }
}
