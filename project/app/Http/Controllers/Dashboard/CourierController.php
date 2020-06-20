<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Courier;


class CourierController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Courier  $model
     * @return \Illuminate\View\View
     */
    public function index(Courier $model)
    {
        return view('dashboard.courier', ['couriers' => $model->paginate(15)]);
    }

    /**
     * Show the form for editing the profile.
     *
     * @param  \App\Courier $model
     * @return \Illuminate\View\View
     */
    public function edit($id,Courier $model)
    {
        if($id != 0){
            return view('dashboard.edit.edit-courier')->with('courier', $model->where('id',$id)->first());
        }
        return view('dashboard.edit.edit-courier');
    }
}
