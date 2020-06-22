<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Box;
use Illuminate\Http\Request;


class BoxController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Box  $model
     * @return \Illuminate\View\View
     */
    public function index(Box $model)
    {
        return view('dashboard.box', ['boxes' => $model->join('categories','categories.id','=','boxes.category_id')
            ->select('boxes.*','categories.name')
            ->paginate(15)]);
    }

    /**
     * Show the form for editing the profile.
     *
     * @param  \App\Box $model
     * @return \Illuminate\View\View
     */
    public function edit($id,Box $model)
    {
        if($id != 0){
            return view('dashboard.edit.edit-box')->with('box', $model->where('id',$id)->first());
        }
        return abort(404);
    }


    public function update(Request $request, $id){

        if($id != 0){
            $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
        } else {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('storage/images');
            $image->move($destinationPath,$name);
            Box::boxUpdateOrInsert($request, $id, $name);
        } else {
            Box::boxUpdateOrInsertNoImage($request, $id);
        }

        return back()->withStatus(__('Box successfully updated.'));
    }


}
