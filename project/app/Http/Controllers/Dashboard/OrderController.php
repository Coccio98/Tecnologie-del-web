<?php

namespace App\Http\Controllers\Dashboard;

use App\Courier;
use App\Http\Controllers\Controller;
use App\Order;
use App\Shipping;
use Illuminate\Http\Request;


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

    /**
     * Show the form for editing the profile.
     *
     * @param  \App\Order $model
     * @return \Illuminate\View\View
     */
    public function edit($id,Order $model)
    {
        if($id != 0){
            return view('dashboard.edit.edit-order')->with('order', $model->where('id',$id)->first())
                ->with('couriers',Courier::all())->with('shippings',Shipping::all());
        }
        return abort(404);
    }

    public function update(Request $request, $id){
        Order::orderUpdate($request, $id);

        return back()->withStatus(__('Order successfully updated.'));
    }

}
