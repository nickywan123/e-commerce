<?php

namespace App\Http\Controllers\WEB\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Globals\Products\Product;

class ProductJSONController extends Controller
{
    public function getProducts()
    {
        $product = Product::with('images')->with('categories')->paginate(10);

        return response()->json($product, 200);
    }
}
