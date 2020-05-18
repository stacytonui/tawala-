<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Spatie\Searchable\Search;


class ProductController extends Controller
{
    public function index()
    {
        $products = \App\Product::paginate(8);
        $categories = \App\Category::all();

        return view('welcome')->with('products', $products)
            ->with('categories',$categories);
    }
    public function showProducts()
    {
    $products = \App\Product::paginate(8);
    $categories = \App\Category::all();
    return view('pages.shop')->with('products', $products)
        ->with('categories',$categories);
    }

    public function showProduct($id)
    {
     $product = Product::select('*')
         ->where([
             ['id', '=', $id],

         ])
         ->get();
     //dd($product);

    return view('pages.single')->with('product', $product);
    }
    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Product::class, 'name')

            ->perform($request->input('query'));
        //dd($searchResults);

        return view('pages.search', compact('searchResults'));
    }


}
