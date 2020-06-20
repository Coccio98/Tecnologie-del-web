<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Order;


class OrderController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Order  $model
     * @return \Illuminate\View\View
     */
    public function index(Order $model)
    {
        return view('dashboard.order', ['orders' => $model->join('couriers','couriers.id','=','orders.courier_id')
            ->join('shippings','shippings.id','=','orders.shipping_id')
            ->select('orders.*','shippings.status','couriers.name')
            ->paginate(15)]);
    }
}
