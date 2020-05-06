<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class Order extends Model
{
    public $timestamps = true;

    public static function ordersWhere($id){
        return Order::where('orders.user_id', $id)->get();
    }

    public static function orderUpdateOrInsert($request){
        try{
            $id=Order::insertGetId(
                ['user_id'=> ($request->user()->id),
                    'number'=>'129',
                    'total'=>$request->total,
                    'payment_method_id'=>$request->payment,
                    'address_id'=>$request->address]);

            $cart= Product::productsCartWhere($request->user()->id);
            foreach ($cart as $product) {
                DB::table('compose')->updateOrInsert([
                    'price_stamp' => $product->price*(100-$product->sale)/100,
                    'quantity' => $product->quantity,
                    'product_id' => $product->id,
                    'order_id' => $id
                ]);
                Product::where('id',$product->id)
                    ->update(['selling_number'=>($product->selling_number + $product->quantity)]);
            }

            $coupons= Coupon::couponsUserWhere($request->user()->id);
            foreach ($coupons as $coupon) {
                DB::table('redeem')->where('coupon_id', $coupon->id)
                    ->where('user_id',$request->user()->id)
                    ->update(['used'=>true]);
            }

            DB::table('cart')->where('user_id',$request->user()->id)->delete();

        }   catch (Exception $e){

        }
    }
    public static function trackMyOrder($ordersId)
    {
        return Order::join('shippings', 'orders.shipping_id', '=', 'shippings.id')
            ->join('addresses', 'orders.address_id', '=', 'addresses.id')
            ->join('payment_methods', 'orders.payment_method_id', '=', 'payment_methods.id')
            ->where('orders.id', $ordersId)
            ->select('orders.*', 'shippings.status', 'addresses.*', 'payment_methods.*')
            ->first();
    }
    public static function orderDetails($ordersId)
    {
        return Order::join('shippings', 'orders.shipping_id', '=', 'shippings.id')
            ->join('payment_methods', 'orders.payment_method_id', '=', 'payment_methods.id')
            ->where('orders.id', $ordersId)
            ->select('orders.*', 'shippings.status', 'payment_methods.cardNumber')
            ->first();
    }
}
