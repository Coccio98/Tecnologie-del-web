<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Subcategory;


class SubcategoryController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Subcategory  $model
     * @return \Illuminate\View\View
     */
    public function index(Subcategory $model)
    {
        return view('dashboard.subcategory', ['dashsubcategories' => $model->paginate(15)]);
    }
}
