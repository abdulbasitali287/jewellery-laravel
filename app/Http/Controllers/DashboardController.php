<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('screens.user.dashboard.dashboard');
    }

    public function orders(){
        return view('screens.user.dashboard.order');
    }

    public function orderDetails(Order $order){

        return view('screens.user.dashboard.order-details',compact('order'));
    }

    public function productDetails($product){
        $orders = auth()->user()->orders;
        $image = [];
        foreach ($orders->products as $product) {
            foreach ($product->images as $image) {
                $image[] = $image->image;
            }
        }
        return response()->json(['product' => $image]);
    }

    public function shippingAddress(){
        return view('screens.user.dashboard.shipping-address');
    }

    // public function billingAddress(){
    //     return view('screens.user.dashboard.shipping-address');
    // }

    public function addresses(){
        return view('screens.user.dashboard.addresses');
    }

    public function account(){
        return view('screens.user.dashboard.account');
    }
    public function accountDetails(){
        return view('screens.user.dashboard.account-detail');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('login');
    }
}
