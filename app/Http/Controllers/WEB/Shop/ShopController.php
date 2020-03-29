<?php

namespace App\Http\Controllers\WEB\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories\Category;

class ShopController extends Controller
{
    public function category(Request $request, $categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->first();

        return view('shop.catalog.partials.catalog-products')
            ->with('category', $category);
    }
}
