<?php

namespace App\Http\Controllers;

use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function confirm($id)
    {
        //find id of the order
        $order = Order::find($id);
        $order->update(['status' => 1]);
        session()->flash('msg', 'Order has been confirmed');
        return redirect('/admin/orders');
    }

    public function pending($id)
    {
        $order = Order::find($id);
        $order->update(['status' => 0]);
        session()->flash('msg', 'Order again has been Pending');
        return redirect('/admin/orders');
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('admin.orders.details', compact('order'));
    }

    public function destroy($id)
    {
        Order::destroy($id);
        session()->flash('msg', 'Your Order has been deleted');
        return redirect('/admin/orders');
    }
}
