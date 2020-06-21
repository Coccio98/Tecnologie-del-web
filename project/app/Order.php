<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;
use Carbon\Carbon;

class Order extends Model
{
    public $timestamps = true;

    public static function ordersWhere($id){
        return Order::where('orders.user_id', $id)->get();
    }

    public static function orderUpdateOrInsert($request){
        try{
            $latestOrder=Order::orderBy('created_at', 'desc')->orderBy('id', 'desc')->first();

            $id=Order::insertGetId(
                ['user_id'=> ($request->user()->id),
                    'number'=>'#'.str_pad($latestOrder->id + 1, 10, "0", STR_PAD_LEFT),
                    'total'=>$request->total,
                    'payment_method_id'=>$request->payment,
                    'address_id'=>$request->address,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);

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
                Stock::where('id', $product->stock_id)
                    ->update(['number'=>($product->number - $product->quantity)]);
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

    public static function orderUpdate($request, $id){

        return Order::where('id', $id)->update(
            ['delivery_date'=> $request->delivery_date,
                'courier_id'=>$request->courier,
                'shipping_id'=>$request->shipping]
        );
    }
}
