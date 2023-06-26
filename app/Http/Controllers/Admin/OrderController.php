<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 0)->get();
        return view('dashboard.orders.index', compact('orders'));
    }

    public function view($id)
    {
        $orders = Order::find($id);
        return view('dashboard.orders.view', compact('orders'));
    }

    public function updateorder(Request $request, $id)
{
    $order = Order::find($id);
    $order->status = $request->input('order_status');
    $order->save();

    return redirect('orders')->with('status', 'Order Updated');
}


    public function orderhistory()
    {
        $orders = Order::where('status', 1)->get();
        return view('dashboard.orders.history', compact('orders'));
    }
}
