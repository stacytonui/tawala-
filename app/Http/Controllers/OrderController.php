<?php

namespace App\Http\Controllers;

use App\Contracts\OrderContract;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    public function index()
    {
        $orders = $this->orderRepository->listOrders();

        return view('admin.orders', compact('orders'));
    }
    public function pending()
    {
        $orders = $this->orderRepository->listPending();

        return view('admin.orders', compact('orders'));
    }
    public function complete()
    {
        $orders = $this->orderRepository->listCompleted();

        return view('admin.orders', compact('orders'));
    }


    public function show($orderNumber)
    {
        $order = $this->orderRepository->findOrderByNumber($orderNumber);


        return view('admin.trial', compact('order'));
    }

    public function completed($order)
    {
        $orderr = $this->orderRepository->findOrderByNumber($order);
        if($orderr->status == 'pending')
        {

            //$orderr->update(['completed'=>$orderr->status]);
            $orderr->status = 'completed';
            $orderr->save();

            //dd($orderr);
            return redirect()->back();

        }


       // dd($order);
    }
}
