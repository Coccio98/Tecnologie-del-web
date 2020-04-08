<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public static function addressesWhere($id){
        return Address::where('user_id', $id)->get();
    }

    public static function addressWhere($addressId, $userId){
        return Address::where('user_id', $userId)->where('id', $addressId)->first();
    }

    public static function addressUpdateOrInsert($request, $address_id){
        return Address::updateOrInsert(
            ['id' => $address_id, 'user_id' => $request->user()->id],
            ['address'=> $request->address,
                'city'=> $request->city,
                'country'=> $request->country,
                'phoneNumber'=> $request->phone]
        );
    }

    public static function addressDelete($addressId, $userId){
        return Address::where('user_id', $userId)->where('id', $addressId)->delete();
    }
}
