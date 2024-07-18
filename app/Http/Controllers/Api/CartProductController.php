<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CartRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class CartProductController extends Controller
{
    public function store(CartRequest $request): JsonResponse
    {
        $cart = auth()->user()->cart()->firstOrCreate();
        if ($cart->products()->where('product_id', $request->product_id)->exists()) {
            $cart->products()->updateExistingPivot($request->product_id, [
                'quantity' => $cart->products()->find($request->product_id)->pivot->quantity + $request->quantity,
            ]);
        } else {
            $cart->products()->attach($request->product_id, ['quantity' => $request->quantity]);
        }

        return response()->json($cart, 201);
    }

    public function destroy(Product $product): JsonResponse
    {
        $cart = auth()->user()->cart;
        $cart->products()->where('product_id', $product)->updateExistingPivot($product, ['deleted' => true]);
        return response()->json($cart);
    }
}
