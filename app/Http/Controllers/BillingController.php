<?php

namespace App\Http\Controllers;

use App\Order;

use App\Billing;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index()
    {
        $billings = Billing::all();
        return view('admin.billings.index', compact('billings'));
    }

    public function confirm($id)
    {
        $billing = Billing::find($id);
        $billing->update(['status' => 1]);
        session()->flash('msg', 'billing has been confirmed');
        return redirect('/admin/billings');
    }

    public function pending($id)
    {
        $billing = Billing::find($id);
        $billing->update(['status' => 0]);
        session()->flash('msg', 'billing again has been Pending');
        return redirect('/admin/billings');
    }

    public function show($id)
    {
        $order = Order::find($id);
        $billing = Billing::find($id);
        return view('admin.billings.details', compact('billing', 'order'));
    }


    public function destroy($id)
    {
        Billing::destroy($id);
        session()->flash('msg', 'Your Billing has been deleted');
        return redirect('/admin/billings');
    }
}
