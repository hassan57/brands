<?php

namespace App\Http\Controllers\front;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaveLaterController extends Controller
{
    /*
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
    public function destroy($id)
    {
        Cart::instance('saveForLater')->remove($id);

        return redirect()->back()->with('msg', 'Item has been Deleted ');
    }

    public function move($id)
    {

        $item = Cart::instance('saveForLater')->get($id);

        Cart::instance('saveForLater')->remove($id);

        $dubl = Cart::instance('default')->search(function ($cartitem, $rowId) use ($id) {
            return $cartitem->id === $id;
        });

        if ($dubl->isNotEmpty()) {
            return redirect()->back()->with('msg', 'Item has been already in save to later');
        }

        Cart::add([
            'id'      => $item->id,
            'name'    => $item->name,
            'qty'     => $item->qty,
            'price'   => $item->price,
            'options' => [
                'size'  => $item->options->size,
                'color' => $item->options->color
            ]
        ])->associate('App\Product');

        return redirect()->back()->with('msg', 'Item has been Save For Later ');
    }
}
