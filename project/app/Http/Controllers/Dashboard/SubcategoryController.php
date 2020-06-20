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
        return view('dashboard.subcategory', ['dashsubcategories' => $model->join('categories','categories.id','=','subcategories.category_id')
            ->select('subcategories.*','categories.name as category')
            ->paginate(15)]);
    }

    /**
     * Show the form for editing the profile.
     *
     * @param  \App\Subcategory  $model
     * @return \Illuminate\View\View
     */
    public function edit($id,Subcategory $model)
    {
        if($id != 0){
            return view('dashboard.edit.edit-subcategory')->with('subcategory', $model->where('id',$id)->first());
        }
        return view('dashboard.edit.edit-subcategory');
    }
}
