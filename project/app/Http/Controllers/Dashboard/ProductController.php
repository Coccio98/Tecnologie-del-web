<?php

namespace App\Http\Controllers\Dashboard;

use App\Brand;
use App\Http\Controllers\Controller;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Product  $model
     * @return \Illuminate\View\View
     */
    public function index(Product $model)
    {
        return view('dashboard.product', ['products' => $model->join('brands', 'brands.id', '=','products.brand_id')
            ->join('subcategories','subcategories.id','=','products.subcategory_id')
            ->select('products.*','subcategories.name as subcategory','brands.name as brand')
            ->paginate(15)]);
    }

    /**
     * Show the form for editing the profile.
     *
     * @param  \App\Product  $model
     * @return \Illuminate\View\View
     */
    public function edit($id,Product $model)
    {
        if($id != 0){
            return view('dashboard.edit.edit-product')->with('product', $model->where('id',$id)->first())
                ->with('dashsubcategories', Subcategory::all())->with('brands', Brand::all());
        }
        return view('dashboard.edit.edit-product')->with('dashsubcategories', Subcategory::all())->with('brands', Brand::all());
    }

    public function update(Request $request, $id){
        Product::productUpdateOrInsert($request, $id);

        return back()->withStatus(__('Product successfully updated.'));
    }
}
