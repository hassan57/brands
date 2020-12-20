<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Size_Product;
use App\Color_Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.add_product');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        global $imageNew;
        $request->validate([
            'name'        => 'required',
            'price'       => 'required|numeric',
            'description' => 'required',
            'cat_id'      => 'required|numeric',
            'colors'      => 'required',
            'stock'       => 'required',
            'sizes'       => 'required',
            'image'       => 'sometimes|nullable'
        ]);

        $data = $request->except(['image']);

        /*STORE IMAGE*/
        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageNew = rand(0, 100000000) . $image->getClientOriginalName();
            $image->move('uploads/products/', $imageNew);
            $data['image'] = $imageNew;
        }

        $product = Product::create($data);


        foreach ($request->colors as $color) {
            Color_Product::create([
                'color_id'    => $color,
                'product_id'  => $product->id
            ]);
        }

        foreach ($request->sizes as $size) {
            Size_Product::create([
                'size_id'    => $size,
                'product_id'  => $product->id
            ]);
        }
        $request->session()->flash('msg', 'Your product has been added');

        return redirect('/admin/product');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.products.details', compact('product'));
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        global $imageNew;
        $request->validate([
            'name'        => 'required',
            'price'       => 'required',
            'description' => 'required',
            'cat_id'      => 'required|numeric',
            'size_id'     => 'required|numeric',
            'colors'      => 'required',
            'stock'       => 'required',
            'sizes'       => 'required',
            'image'       => 'sometimes|nullable'
        ]);

        $data = $request->except(['color_id', 'size_id', 'image', 'id']);

        /*STORE IMAGE*/
        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageNew = rand(0, 100000000) . $image->getClientOriginalName();
            $image->move('uploads', $imageNew);
            $data['image'] = $imageNew;
        }

        foreach ($request->colors as $color) {
            Color_Product::update([
                'color_id'    => $color,
            ])->where('product_id', $id);
        }

        foreach ($request->sizes as  $size) {
            Size_Product::update([
                'size_id'    => $size,
            ])->where('product_id', $id);
        }

        Product::where('id', $id)->update($data);

        $request->session()->flash('msg', 'Your product has been added');

        return redirect('/admin/product');
    }


    public function destroy($id)
    {
        Product::destroy($id);
        session()->flash('msg', 'Your product has been deleted');
        return redirect('/admin/product');
    }
}
