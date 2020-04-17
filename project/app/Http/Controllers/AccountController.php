<?php

namespace App\Http\Controllers;

use App\Order;
use App\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\User;
use App\Address;
use App\Product;
use ArrayObject;

class AccountController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function modify(){
        return view('pages.security')->with('modify', 'true');
    }

    public function save(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phone' => ['string', 'max:255']
        ]);

        User::userUpdate($request);

        $request->user()->name = $request->name;
        $request->user()->surname = $request->surname;
        $request->user()->phone = $request->phone;
        return redirect('security');
    }

    public function addAddress(Request $request,$id){
        $path = 'pages.addAddress';
        if ($id == 0){
            return view($path)->with('id', $id);
        } else {
            $address = Address::addressWhere($id, $request->user()->id);
            return view($path)->with('address', $address)->with('id',$id);
        }
    }

    public function saveAddress(Request $request, $id){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255']
        ]);

        Address::addressUpdateOrInsert($request, $id);
        return redirect('address');
    }

    public function deleteAddress(Request $request, $id){
        Address::addressDelete($id,$request->user()->id);
        return redirect('address');
    }

    public function addCreditCard(Request $request,$id){
        $path = 'pages.addCreditCard';
        $addresses = Address::addressesWhere($request->user()->id);
        if ($id == 0){
            return view($path)->with('id', $id)->with('addresses',$addresses);
        } else {
            $creditCard = PaymentMethod::paymentMethodWhere($id, $request->user()->id);
            return view($path)->with('creditCard', $creditCard)->with('id',$id)->with('addresses',$addresses);
        }
    }

    public function saveCreditCard(Request $request, $id){
        $request->validate([
            'cardHolder' => ['required', 'string', 'max:255'],
            'cardNumber' => ['required', 'string', 'max:255'],
            'month' => ['required'],
            'year' => ['required'],
            'address' => ['required'],
        ]);

        PaymentMethod::paymentMethodUpdateOrInsert($request, $id);
        return redirect('paymentOptions');
    }

    public function deleteCreditCard(Request $request, $id){
        PaymentMethod::paymentMethodDelete($id,$request->user()->id);
        return redirect('paymentOptions');
    }

    public function order(Request $request){
        $path = 'pages.myorder';
        $orders=Order::ordersWhere($request->user()->id);
        $products = new ArrayObject();
        foreach ($orders as $order){
            $products->append(Product::orderProductWhere($order->id));
        }
        return view($path)->with('orders',$orders)->with('products',$products);
    }
}
