<?php

namespace App\Http\Controllers\WEB\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Globals\Products\Product;

class ProductJSONController extends Controller
{
    public function getProducts()
    {
        $product = Product::with('images')->with('categories')->get();

        return response()->json($product, 200);
    }
}
