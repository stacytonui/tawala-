<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contracts\OrderContract;
use App\Repositories\OrderRepository;

class CheckoutController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->middleware('auth');
    }
   // public function __construct()
   // {

   // }

    public function checkout()
    {
        $user = Auth::user();
        $locations = Location::all();
        $cartCollection = \Cart::getContent();

        //return view('pages.cart')->with(['cartCollection' => $cartCollection]);

        return view('pages.checkout')->with('locations', $locations)->with('user', $user)->with('cartCollection', $cartCollection);

    }
    public function placeOrder(Request $request)
    {
        // Before storing the order we should implement the
        // request validation which I leave it to you
        $order = $this->orderRepository->storeOrderDetails($request->all());

        dd($order);
    }

}
