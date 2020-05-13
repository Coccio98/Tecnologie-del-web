<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PaymentMethod extends Model
{
    public $timestamps = true;

    public $additional_attributes = ['full_payment'];

    public function getFullPaymentAttribute()
    {
        return "{$this->cardHolder};\n{$this->cardNumber};";
    }

    public static function paymentMethodsWhere($id){
        return PaymentMethod::where('payment_methods.user_id', $id)
            ->join('billing_address', 'payment_methods.id', '=', "billing_address.payment_methods_id")
            ->join('addresses', 'addresses.id', '=', "billing_address.address_id")
            ->select('payment_methods.*', 'addresses.name', 'addresses.address', 'addresses.city','addresses.country','addresses.phoneNumber')->get();
    }

    public static function paymentMethodWhere($paymentId, $userId){
        return PaymentMethod::where('user_id', $userId)->where('payment_methods.id', $paymentId)
            ->join('billing_address', 'payment_methods.id', '=', "billing_address.payment_methods_id")
            ->select('payment_methods.*','billing_address.address_id')->first();
    }

    public static function paymentMethodUpdateOrInsert($request, $paymentId)
    {
        if($paymentId == 0){
            $id = PaymentMethod::insertGetId([
                'user_id' => $request->user()->id,
                'cardHolder' => $request->cardHolder,
                'cardNumber' => $request->cardNumber,
                'expiring' => $request->month . '/' . $request->year,
            ]);
             return DB::table('billing_address')->insert(['payment_methods_id' => $id, 'address_id' => $request->address]);
        }
        return PaymentMethod::join('billing_address', 'payment_methods.id', '=', "billing_address.payment_methods_id")
            ->updateOrInsert(
                ['payment_methods.id' => $paymentId, 'user_id' => $request->user()->id],
                ['cardHolder' => $request->cardHolder,
                    'cardNumber' => $request->cardNumber,
                    'expiring' => $request->month . '/' . $request->year,
                    'billing_address.address_id' => $request->address]
            );
    }

    public static function paymentMethodDelete($paymentId, $userId){
        return PaymentMethod::where('user_id', $userId)->where('id', $paymentId)->delete();
    }
}
