<?php


namespace App\Repositories;

use Cart;
use App\Order;
use App\Product;
use App\OrderItem;
use App\Contracts\OrderContract;

class OrderRepository extends BaseRepository implements OrderContract
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function storeOrderDetails($params)
    {

        $order = Order::create([

            'order_number' => 'TWL-' . strtoupper(uniqid()),
            'user_id' => auth()->user()->id,
            'status' => 'pending',
            'grand_total' =>\Cart::getTotal() ,
            'item_count' => Cart::getTotalQuantity(),

            'name' => $params['name'],

            'address' => $params['address'],
            'location' => $params['location'],

            'email' => $params['email'],
            'house' => $params['house'],
            'phone' => $params['phone']
        ]);

        if ($order) {

            $items = Cart::getContent();

            foreach ($items as $item) {
                // A better way will be to bring the product id with the cart items
                // you can explore the package documentation to send product id with the cart
                $product = Product::where('name', $item->name)->first();

                $orderItem = new OrderItem([
                    'product_id' => $product->id,
                    'quantity' => $item->quantity,
                    'price' => $item->getPriceSum()
                ]);

                $order->items()->save($orderItem);
            }
        }

        return $order;
    }


}
