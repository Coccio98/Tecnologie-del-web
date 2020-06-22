<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Information;
use Illuminate\Http\Request;


class InformationController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Information  $model
     * @return \Illuminate\View\View
     */
    public function index(Information $model)
    {
        return view('dashboard.information', ['informations' => $model->paginate(15)]);
    }

    /**
     * Show the form for editing the profile.
     *
     * @param  \App\Information $model
     * @return \Illuminate\View\View
     */
    public function edit($id,Information $model)
    {
        if($id != 0){
            return view('dashboard.edit.edit-information')->with('information', $model->where('id',$id)->first());
        }
        return abort(404);
    }


    public function update(Request $request, $id){
        Information::informationUpdateOrInsert($request, $id);

        return back()->withStatus(__('Information successfully updated.'));
    }


}
