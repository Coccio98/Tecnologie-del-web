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

    /**
     * Show the form for editing the profile.
     *
     * @param  \App\Showcase  $model
     * @return \Illuminate\View\View
     */
    public function edit($id,Showcase $model)
    {
        if($id != 0){
            return view('dashboard.edit.edit-showcase')->with('showcase', $model->where('id',$id)->first());
        }
        return view('dashboard.edit.edit-showcase');
    }
}
