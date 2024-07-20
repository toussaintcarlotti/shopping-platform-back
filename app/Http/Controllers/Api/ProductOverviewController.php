<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductOverviewController extends Controller
{
    public function __invoke()
    {
        $products = Product::inRandomOrder()->limit(6)->get();
        return response()->json($products);
    }
}
