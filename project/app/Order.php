<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = true;

    public static function ordersWhere($id){
        return Order::where('orders.user_id', $id)
            ->join('addresses', 'addresses.id','=', 'orders.address_id')
            ->join('payment_methods', 'payment_methods.id','=', 'orders.payment_method_id')
            ->join('compose', 'orders.id', '=', "compose.order_id")
            ->join('products', 'products.id', '=', "compose.product_id")
            ->leftJoin('images','images.product_id','=','products.id')
            ->where(function ($query) {
                $query->where('images.main', true)
                    ->orWhereNull('images.image');})
            ->join('belong','products.id','=',"belong.product_id")
            ->join('categories','categories.id','=',"belong.category_id")
            ->select('orders.*', 'images.image','payment_methods.*','addresses.name as address_name',
                'addresses.city','addresses.address','addresses.country','addresses.phoneNumber','products.*','compose.order_id',
                'compose.quantity')->get();
    }
}
