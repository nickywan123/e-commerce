<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Models\Categories\Category;
use App\Models\Categories\ProductType;
use App\Models\Categories\SubCategory;
use App\Models\Products\Product;
use Illuminate\Support\Facades\View;

class ShopController extends Controller
{
    protected $cart = null;
    protected $categories = null;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            // Check if user is authenticated or not.
            if (Auth::check()) {
                // If authenticated, then get their cart.
                $this->cart = Auth::user()->cartItems;
            }
            // Get all categories, with subcategories and its images.
            $categories = Category::with('image')->with('childCategory.image')->get();

            // Share the above variable with all views in this controller.
            View::share('categories', $categories);
            View::share('cart', $this->cart);

            return $next($request);
        });
    }

    /**
     * Handles /shop
     */
    public function index()
    {
        $categories = Category::with('image')->with('childCategory.image')->get();
        // return $categories;
        return view('shop.index')->with('categories', $categories);
    }

    /**
     * Handles /shop/category/{category-slug}
     */
    public function category($slug)
    {
        // Initialize category variable.
        $category = null;
        $relatedCategory = null;

        // Check if it's in Category..
        $category = Category::where('slug', $slug)->with('products.images')->first();
        $relatedCategories = Category::where('slug', '!=', $slug)->get();
        if ($category == null) {
            // ..or it's in SubCategory
            $category = SubCategory::where('slug', $slug)->with('products.images')->first();

            // Get above category's parent.
            $parentCategory = Category::find($category->parentCategory->id);

            // Get parent category's subcategory.
            $relatedCategories = $parentCategory->childCategory;
        }

        // return $category;
        return view('shop.category')->with('category', $category)->with('relatedCategories', $relatedCategories);
    }

    /**
     * Handles /shop/product/{category-slug}/{product-type-slug}
     */
    public function productType($categorySlug, $productType)
    {
        $category = Category::where('slug', $categorySlug)->first();
        if ($category == null) {
            $category = SubCategory::where('slug', $categorySlug)->first();
            $parentCategory = Category::find($category->parentCategory->id);
            $relatedCategories = $parentCategory->childCategory;
            $productType = ProductType::where('slug', $productType)->with('products.images')->first();
        }

        return view('shop.category')->with('category', $productType)->with('relatedCategories', $relatedCategories);
    }

    /**
     * Handles /shop/product/{product-slug}
     */
    public function product($slug)
    {
        $product = Product::where('slug', $slug)->with('images')->first();
        // return $product;
        return view('shop.product')->with('product', $product);
    }
}
