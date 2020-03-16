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
use App\Models\Users\User;

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
                $this->cart = Auth::user()->carts->where('status', 2001);
            }
            // Get all categories, with subcategories and its images.
            $categories = Category::with('image')->with('subcategories.image')->get();

            // Share the above variable with all views in this controller.
            View::share('categories', $categories);
            View::share('cart', $this->cart);

            // Return the request.
            return $next($request);
        });
    }

    /**
     * Handles /shop
     */
    public function index()
    {
        // Get all categories and subcategories with its image.
        $categories = Category::with('image')->with('subcategories.image')->get();
        return view('shop.index')->with('categories', $categories);
    }

    /**
     * Handles /shop/category/{category-slug}
     */
    public function category($categorySlug)
    {
        // Get matching category with related products and their images.
        $category = Category::where('slug', $categorySlug)->with('products.images')->first();

        // Get all categories for tree view.
        $allCategories = Category::all();

        return view('shop.catalog.category')
            ->with('category', $category)
            ->with('allCategories', $allCategories);
    }

    /**
     * Handles /shop/category/{category-slug}/{subcategory-slug}
     */
    public function subcategory($categorySlug, $subcategorySlug)
    {
        // Get matching category with related products and their images.
        $subcategory = SubCategory::where('slug', $subcategorySlug)->with('products.images')->first();

        // Get parent category of the subcategory.
        $category = $subcategory->parentCategory;

        // Get all categories for tree view.
        $allCategories = Category::all();

        return view('shop.catalog.subcategory')
            ->with('subcategory', $subcategory)
            ->with('category', $category)
            ->with('allCategories', $allCategories);
    }

    /**
     * Handles /shop/product/{category-slug}/{product-type-slug}
     */
    // /category/{categorySlug}/{subcategorySlug}/{productTypeSlug}
    public function productType($categorySlug, $subcategorySlug, $productTypeSlug)
    {
        // Get matching product type with related products and their images.
        $type = ProductType::where('slug', $productTypeSlug)->with('products.images')->first();

        // Get parent subcategory of the product type.
        $subcategory = $type->parentSubcategory;

        // Get parent category of the product type.
        $category = $subcategory->parentCategory;

        // Get all categories for tree view.
        $allCategories = Category::all();

        return view('shop.catalog.type')
            ->with('type', $type)
            ->with('subcategory', $subcategory)
            ->with('category', $category)
            ->with('allCategories', $allCategories);
    }

    /**
     * Handles /shop/product/{product-slug}
     */
    public function product(Request $request, $slug)
    {
        if ($request->has('color')) {
            // TODO: Change image and other related info if color is specified.
            return 'Work in progress.';
        } else {
            // Get matching product.
            $product = Product::where('slug', $slug)->with('images')->first();
        }

        return view('shop.product')->with('product', $product);
    }

    /**
     * Handles /shop/shopping-cart
     * An empty view will be returned first. The view will then submit an AJAX request.
     */
    public function shoppingCart(Request $request)
    {
        // If ajax request..
        if ($request->ajax()) {
            // Find user
            $user = User::find(Auth::user()->user_id);
            // Get items in user's cart.
            $cartItems = $user->cartItems->where('status', 2001);
            // Return a partial view (can be treated as a component), the view will loop through all the items.
            return view('shop.cart.partials.shopping-cart-item')->with('cartItems', $cartItems);
        }

        // Return view.
        // After finished loading, the view will submit an AJAX request that will be handled by the statement above.
        return view('shop.shopping-cart');
    }

    // Author - Wan Shahruddin

    /**
     * Handles /shop/category/[category-name]
     */
    public function topLevelCategory($topLevelSlug)
    {
        return view('shop.catalog.top-level');
    }
}
