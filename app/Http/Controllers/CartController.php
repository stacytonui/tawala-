<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CartController extends Controller
{
    public function cart()  {
        $cartCollection = \Cart::getContent();

        return view('pages.cart')->with(['cartCollection' => $cartCollection]);
    }
    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,

            )
        ));
       // return redirect()->back()->with('success', 'Item is Added to Cart!');
       return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
            ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
    \Cart::clear();
    return redirect()->route('cart.index')->with('success_msg', 'Cart is cleared!');
    }



}
