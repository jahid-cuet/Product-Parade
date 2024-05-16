<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function cat_create()
{
    return view('layouts.category_form');
}

public function cat_store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255|unique:categories,name',
    ]);

    $category = new Category();
    $category->name = $request->name;
    $category->save();

    // return view('layouts.success');
    return back()->withSuccess('Product Category Created!!!');
}
}

