<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\User;
use App\Address;

class AccountController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function modify(){
        return view('pages.security')->with('modify', 'true');
    }

    public function save(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255']
        ]);

        User::userUpdate($request);

        $request->user()->name = $request->name;
        $request->user()->surname = $request->surname;
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
}
