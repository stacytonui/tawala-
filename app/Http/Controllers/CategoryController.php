<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory($category)
    {
        $products = \App\Category::find($category)->products;
        $categories = \App\Category::all();
//dd($products);
        return view('pages.category', ['products'=>$products, 'categories'=>$categories]);
    }
}
