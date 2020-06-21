<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Image;
use App\Product;
use Illuminate\Http\Request;


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
            Image::imageUpdateOrInsert($request, $id, $name);
        } else {
            Image::imageUpdateOrInsertNoImage($request, $id);
        }

        return back()->withStatus(__('Image successfully updated.'));
    }

    public function delete($id){
        Image::imageDelete($id);

        return back()->withStatus(__('Image successfully deleted.'));
    }

}
