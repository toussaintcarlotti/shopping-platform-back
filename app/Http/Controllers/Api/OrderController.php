<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\JsonResponse;

class OrderController extends Controller
{
    public function index(): JsonResponse
    {
        $orders = auth()->user()->orders;
        return response()->json($orders);
    }

    public function show(Order $order): JsonResponse
    {
        return response()->json($order);
    }

    public function store(): JsonResponse
    {
        $order = auth()->user()->orders()->create([
            'reference' => uniqid('ORD-', true),
        ]);

        foreach (auth()->user()->cart->products(all: true)->get() as $product) {
            $order->products()->attach($product->id, [
                'quantity' => $product->pivot->quantity,
                'deleted' => $product->pivot->deleted,
                'price' => $product->price,
            ]);
        }

        auth()->user()->cart->delete();

        return response()->json($order, 201);
    }
}
