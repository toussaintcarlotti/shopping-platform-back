<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
    public function index(): JsonResponse
    {
        $cart = auth()->user()->cart->products;
        return response()->json($cart);
    }

    public function destroy(): JsonResponse
    {
        auth()->user()->cart->delete();

        return response()->json(['message' => 'Cart deleted']);
    }
}
