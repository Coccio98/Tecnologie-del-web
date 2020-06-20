<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Stock;


class StockController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Stock  $model
     * @return \Illuminate\View\View
     */
    public function index(Stock $model)
    {
        return view('dashboard.stock', ['stocks' => $model->paginate(15)]);
    }
}
