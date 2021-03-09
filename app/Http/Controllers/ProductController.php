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
        $products = \App\Product::paginate(4);

        $vegetables = \App\Category::paginate(4)->find(1)->products()->get();
        $dairy = \App\Category::paginate(4)->find(3)->products()->get();
        $fruits = \App\Category::paginate(4)->find(2)->products()->get();
        $legumes = \App\Category::paginate(4)->find(4)->products()->get();


        return view('welcome')->with('products', $products)
            ->with('vegetables',$vegetables)
            ->with('fruits',$fruits)
            ->with('legumes',$legumes)
            ->with('dairy',$dairy);
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
