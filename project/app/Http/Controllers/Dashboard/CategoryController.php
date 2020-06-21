<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;


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

    /**
     * Show the form for editing the profile.
     *
     * @param  \App\Category  $model
     * @return \Illuminate\View\View
     */
    public function edit($id,Category $model)
    {
        if($id != 0){
            return view('dashboard.edit.edit-category')->with('category', $model->where('id',$id)->first());
        }
        return view('dashboard.edit.edit-category');
    }

    public function update(Request $request, $id){
        Category::categoryUpdateOrInsert($request, $id);

        return back()->withStatus(__('Category successfully updated.'));
    }
}
