<?php

namespace App\Http\Controllers;

use App\Models\Order;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $orders = Order::latest()->take(10)->get();
        return view('dashboard', compact('orders'));
    }
}
