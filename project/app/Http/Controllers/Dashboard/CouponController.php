<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Coupon;
use Illuminate\Http\Request;


class CouponController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Coupon  $model
     * @return \Illuminate\View\View
     */
    public function index(Coupon $model)
    {
        return view('dashboard.coupon', ['coupons' => $model->paginate(15)]);
    }

    /**
     * Show the form for editing the profile.
     *
     * @param  \App\Coupon  $model
     * @return \Illuminate\View\View
     */
    public function edit($id,Coupon $model)
    {
        if($id != 0){
            return view('dashboard.edit.edit-coupon')->with('coupon', $model->where('id',$id)->first());
        }
        return view('dashboard.edit.edit-coupon');
    }

    public function update(Request $request, $id){
        Coupon::couponUpdateOrInsert($request, $id);

        return back()->withStatus(__('Coupon successfully updated.'));
    }

}
