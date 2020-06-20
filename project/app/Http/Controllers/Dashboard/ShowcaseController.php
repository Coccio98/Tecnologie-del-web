<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Showcase;


class ShowcaseController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Showcase $model
     * @return \Illuminate\View\View
     */
    public function index(Showcase $model)
    {
        return view('dashboard.showcase', ['showcases' => $model->paginate(15)]);
    }
}
