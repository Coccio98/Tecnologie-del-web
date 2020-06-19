<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Coupon;


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
}
