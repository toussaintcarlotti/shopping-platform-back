<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->paginate();
        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $products = $order->products(all: true)->paginate();
        return view('orders.show', compact('order', 'products'));
    }
}
