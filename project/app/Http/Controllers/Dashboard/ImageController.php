<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Image;


class ImageController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Image  $model
     * @return \Illuminate\View\View
     */
    public function index(Image $model)
    {
        return view('dashboard.image', ['images' => $model->paginate(15)]);
    }
}
