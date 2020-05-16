<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    public function index()
    {
        $products = \App\Product::paginate(8);
        $categories = \App\Category::all();

        return view('welcome')->with('products', $products)
            ->with('categories',$categories);
    }


}
