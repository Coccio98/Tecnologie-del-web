<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Product;
use App\Stock;
use Illuminate\Http\Request;


class StockController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Stock  $model
     * @return \Illuminate\View\View
     */
    public function index(Stock $model)
    {
        return view('dashboard.stock', ['stocks' => $model->join('products','products.id','=','stocks.product_id')
            ->select('stocks.*','products.name')
            ->paginate(15)]);
    }

    /**
     * Show the form for editing the profile.
     *
     * @param  \App\Stock  $model
     * @return \Illuminate\View\View
     */
    public function edit($id,Stock $model)
    {
        if($id != 0){
            return view('dashboard.edit.edit-stock')->with('stock', $model->where('id',$id)->first())
                ->with('products', Product::all());
        }
        return view('dashboard.edit.edit-stock')->with('products', Product::all());
    }

    public function update(Request $request, $id){
        Stock::stockUpdateOrInsert($request, $id);

        return back()->withStatus(__('Stock successfully updated.'));
    }
    public function delete($id){
        Stock::stockDelete($id);

        return back()->withStatus(__('Stock successfully deleted.'));
    }
}
