<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    public static function paymentMethodsWhere($id){
        return PaymentMethod::where('user_id', $id)->get();
    }

    public static function paymentMethodWhere($paymentId, $userId){
        return PaymentMethod::where('user_id', $userId)->where('id', $paymentId)->first();
    }

    public static function paymentMethodUpdateOrInsert($request, $paymentId){
        return PaymentMethod::updateOrInsert(
            ['id' => $paymentId, 'user_id' => $request->user()->id],
            ['cardHolder'=>$request->cardHolder,
                'cardNumber'=> $request->cardNumber,
                'expiring'=> $request->month.'/'.$request->year]
        );
    }

    public static function paymentMethodDelete($paymentId, $userId){
        return PaymentMethod::where('user_id', $userId)->where('id', $paymentId)->delete();
    }
}
