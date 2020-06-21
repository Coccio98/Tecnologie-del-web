<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Coupon extends Model
{
    public $timestamps = true;

    public static function couponWhere($request){
        return Coupon::where('code',$request->coupon_code)->first();
    }

    public static function couponUserWhere($request){
        return Coupon::where('code',$request->coupon_code)
            ->join('redeem', 'redeem.coupon_id', "=", "coupons.id")
            ->where('redeem.user_id',$request->user()->id)->first();
    }

    public static function redeem($userId, $coupon_id){
        return DB::table('redeem')->insert([
            'user_id' => $userId,
            'coupon_id' => $coupon_id,
        ]);
    }
    public static function couponsUserWhere($userId){
        return Coupon::join('redeem', 'redeem.coupon_id', "=", "coupons.id")
            ->where('redeem.user_id',$userId)->where('redeem.used', false)->select('coupons.*')->get();
    }
    public static function couponUpdateOrInsert($request, $id){
        $status = (!empty($request->status) ? 1 : 0);
        return Coupon::updateOrInsert(
            ['id'=> $id],
            ['code'=> $request->code,
                'amount'=> $request->amount,
                'expiry_date'=>$request->expiry_date,
                'status'=>$status]
        );
    }
    public static function couponDelete( $id){
        return Coupon::where('id', $id)->delete();
    }
}
