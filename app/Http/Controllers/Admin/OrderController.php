<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(): View{
        $orders = Order::with('products')->orderBy('id','desc')->get();
        return view('screens.admin.orders.index',compact('orders'));
    }

    public function details(Order $order): View{
        // dd($order);
        return view('screens.admin.orders.order-details',compact('order'));
    }
}
