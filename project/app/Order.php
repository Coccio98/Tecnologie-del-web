<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    public $timestamps = true;

    public static function ordersWhere($id){
        return Order::where('orders.user_id', $id)->get();
    }

    public static function orderUpdateOrInsert($orderId,$userId){
        DB::table('orders')->updateOrInsert(
            ['user_id'=> (Auth::user()->id),
                'number'=>'128',
                'total'=>((new Product)->subtotal()),
                'payment_method_id'=>'1',
                'address_id'=>'2']);

        $cart= Product::productsCartWhere(Auth::user()->id);
        foreach ($cart as $product) {
            DB::table('compose')->updateOrInsert([
                'price_stamp' => $product->price,
                'quantity' => $product->quantity,
                'product_id' => $product->id,
                'order_id' => '1'
            ]);
        }
    }
}
