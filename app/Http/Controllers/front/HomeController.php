<?php

namespace App\Http\Controllers\front;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('front.index', compact('products', 'categories'));
    }
}
