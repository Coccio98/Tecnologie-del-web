<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\Information;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function edit($id,User $model)
    {
        if($id != 0){
            return view('profile.edit')->with('user', $model->where('id',$id)->first());
        }
        return abort(404);
    }

    /**
     * Update the profile
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        User::roleUpdate($request,$id);
        return back()->withStatus(__('Profile successfully updated.'));
    }
}
