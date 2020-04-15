<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = true;

    public static function ordersWhere($id){
        return Order::where('orders.user_id', $id)->get();
    }
}
