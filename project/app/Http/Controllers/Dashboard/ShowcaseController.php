<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Product;
use App\Showcase;
use Illuminate\Http\Request;


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
            return view('dashboard.edit.edit-showcase')->with('showcase', $model->where('id',$id)->first())
                ->with('products', Product::all())
                ->with('productsShowcase', Product::productShowcaseWhere($id));
        }
        return view('dashboard.edit.edit-showcase');
    }

    public function update(Request $request, $id){

        if($id != 0){
            $this->validate($request, [
                'banner' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
        } else {
            $this->validate($request, [
                'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
        }

        if ($request->hasFile('banner')) {
            $image = $request->file('banner');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('storage/images');
            $image->move($destinationPath,$name);
            Showcase::showcaseUpdateOrInsert($request, $id, $name);
        } else {
            Showcase::showcaseUpdateOrInsertNoBanner($request, $id);
        }

        return back()->withStatus(__('Showcase successfully updated.'));
    }

    public function delete($id){
        Showcase::showcaseDelete($id);

        return back()->withStatus(__('Showcase successfully deleted.'));
    }

    public function addProduct(Request $request, $id){
        Showcase::addProductShowcase($request, $id);
        return back()->withStatus(__('Product successfully added.'));
    }

    public function deleteProduct($id, $productId){
        Showcase::deleteProductShowcase($id, $productId);
        return back()-> withStatus(__('Product successfully deleted.'));
    }
}
