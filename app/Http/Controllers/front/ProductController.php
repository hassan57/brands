<?php

namespace App\Http\Controllers\front;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index($id)
    {
        $product = Product::find($id);
        return view('front.product.index', compact('product'));
    }
}
