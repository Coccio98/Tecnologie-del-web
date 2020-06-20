<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Image;
use App\Product;


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
        return view('dashboard.image', ['images' => $model->join('products','products.id','=','images.product_id')
            ->select('images.*','products.name')
            ->paginate(15)]);
    }

    /**
     * Show the form for editing the profile.
     *
     * @param  \App\Image  $model
     * @return \Illuminate\View\View
     */
    public function edit($id,Image $model)
    {
        if($id != 0){
            return view('dashboard.edit.edit-image')->with('image', $model->where('id',$id)->first())
                ->with('products', Product::all());
        }
        return view('dashboard.edit.edit-image')->with('products', Product::all());
    }
}
