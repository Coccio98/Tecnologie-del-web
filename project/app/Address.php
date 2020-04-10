<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = true;

    public static function addressesWhere($id){
        return Address::where('user_id', $id)->get();
    }

    public static function addressWhere($addressId, $userId){
        return Address::where('user_id', $userId)->where('id', $addressId)->first();
    }

    public static function addressPaymentWhere($addressId, $userId){
        return Address::where('user_id', $userId)->where('id', $addressId)->first();
    }

    public static function addressUpdateOrInsert($request, $addressId){
        return Address::updateOrInsert(
            ['id' => $addressId, 'user_id' => $request->user()->id],
            ['name'=>$request->name,
                'address'=> $request->address,
                'city'=> $request->city,
                'country'=> $request->country,
                'phoneNumber'=> $request->phone]
        );
    }

    public static function addressDelete($addressId, $userId){
        return Address::where('user_id', $userId)->where('id', $addressId)->delete();
    }
}
