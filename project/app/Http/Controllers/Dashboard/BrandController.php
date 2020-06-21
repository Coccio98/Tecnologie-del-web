<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Brand;
use Illuminate\Http\Request;


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

    /**
     * Show the form for editing the profile.
     *
     * @param  \App\Brand $model
     * @return \Illuminate\View\View
     */
    public function edit($id,Brand $model)
    {
        if($id != 0){
            return view('dashboard.edit.edit-brand')->with('brand', $model->where('id',$id)->first());
        }
        return view('dashboard.edit.edit-brand');
    }

    public function update(Request $request, $id){
        Brand::brandUpdateOrInsert($request, $id);

        return back()->withStatus(__('Brand successfully updated.'));
    }
}
