<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Product;

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
}
