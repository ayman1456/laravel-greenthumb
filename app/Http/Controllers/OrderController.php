<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    function orders()
    {
        $orders = Order::with('orderItems.products')->latest()->paginate(20);
        // dd($orders);
        return view('backend.orders', compact('orders'));
    }
    function ordersComplete($id)
    {
        $order = Order::find($id);
        $order->status = "Complete";
        $order->save();
        return back();
    }
    function orderCancel($id)
    {
        $order = Order::find($id);
        
        $order->delete();
        return back();
    }

    function myOrders() {
        $orders = Order::where('user_id', auth()->id())->with('orderItems.products')->latest()->paginate(20);
        return view('frontend.myOrders', compact('orders'));
    }
}
