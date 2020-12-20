<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories  = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.add_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|unique:categories',
            'description' => 'smoetimes|nullable'
        ]);

        $data = $request->except(['desritpion']);

        if ($request->description == '') {
            $data['description'] = 'This Category Not Contain Desription';
        }
        Category::create($data);
        session()->flash('msg', 'Your Category has been Added');
        return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.categories.details', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required', Rule::unique('categories')->ignore($category->id),],
            'description' => 'sometimes|nullable'
        ]);

        $data = $request->except(['desritpion']);

        if ($request->description == '') {
            $data['description'] = 'This Category Not Contain Desription';
        }

        $category->update($data);

        session()->flash('msg', 'Your Category has been Updated');
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('msg', 'Your Category has been deleted');
        return redirect('/admin/category');
    }
}
