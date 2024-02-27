<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateShippingAddressRequest;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function shippingAddress(){
        return view('screens.user.dashboard.shipping-address');
    }

    public function updateshippingAddress(UpdateShippingAddressRequest $request){
        auth()->user()->update($request->updateShippingAddress());
        toastr('record updated successfully...!');
        return back();
    }

    public function editShippingAddress(){
        return view('screens.user.dashboard.edit-shipping-address');
    }
}
