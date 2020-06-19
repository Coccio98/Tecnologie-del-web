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
}
