<?php

namespace App\Http\Controllers\front;


use App\OrderItem;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;
use App\Billing;
use App\Order;
use Carbon\Carbon;

class CheckoutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('front.checkout.index');
    }

    public function store(Request $request)
    {

        $contents = Cart::instance('default')->content()->map(function ($item) {
            return $item->model->name . ' ' . $item->qty;
        })->values()->toJson();

        try {

            Stripe::charges()->create([
                'amount' => Cart::total(),
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Some Text',
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count()
                ]
            ]);


            $request->validate([
                'name'     => 'required',
                'email'    => 'required|email',
                'address'  => 'required',
                'city'     => 'required',
                'province' => 'required',
                'postal'   => 'required',
                'phone'    => 'required',
            ]);

            $billing = Billing::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'address'  => $request->address,
                'city'     => $request->city,
                'province' => $request->province,
                'postal'   => $request->postal,
                'phone'    => $request->phone,
                'user_id'  => auth()->user()->id
            ]);

            $order = Order::create([
                'user_id' => auth()->user()->id,
                'billing_id' => $billing->id,
                'status' => 0
            ]);

            foreach (Cart::instance('default')->content() as $item) {

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->model->id,
                    'quainty' => $item->qty,
                    'product_color' => $item->options->color,
                    'product_size' => $item->options->size,
                    'price' => $item->price
                ]);
            }

            Cart::instance('default')->destroy();

            return redirect()->back()->with('msg', 'Success Thank you');
        } catch (Exception $e) {
            // Code
        }
    }
}
