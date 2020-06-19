<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Category  $model
     * @return \Illuminate\View\View
     */
    public function index(Category $model)
    {
        return view('dashboard.category', ['dashcategories' => $model->paginate(15)]);
    }
}
