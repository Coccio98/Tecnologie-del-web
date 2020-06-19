<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Brand;


class BrandController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Brand  $model
     * @return \Illuminate\View\View
     */
    public function index(Brand $model)
    {
        return view('dashboard.brand', ['brands' => $model->paginate(15)]);
    }
}
