<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CartRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class CartProductController extends Controller
{
    public function store(CartRequest $request, Product $product): JsonResponse
    {
        $cart = auth()->user()->cart()->firstOrCreate();
        if ($cart->products()->where('product_id', $product->id)->exists()) {
            $cart->products()->updateExistingPivot($product->id, [
                'quantity' => $cart->products()->find($product->id)->pivot->quantity + $request->quantity,
            ]);
        } else {
            $cart->products()->attach($product->id, ['quantity' => $request->quantity]);
        }

        $cart->load('products');
        return response()->json($cart, 201);
    }

    public function destroy(Product $product): JsonResponse
    {
        $cart = auth()->user()->cart;
        $cart->products()->where('product_id', $product)->updateExistingPivot($product, ['deleted' => true]);
        $cart->load('products');
        return response()->json($cart);
    }
}
