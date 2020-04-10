<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Models\Categories\Category;
use App\Models\Categories\ProductType;
use App\Models\Categories\SubCategory;
use App\Models\Globals\Products\Product;
use Illuminate\Support\Facades\View;
use App\Models\Users\User;
use App\Models\PromotionPage\Banner;
use App\Models\Products\Product as PanelProduct;

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
            $categories = Category::topLevelCategory();

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
        // Author Nick : Display image for promo page slider

        // return view('shop.index')->with('data', $data);
        // Get all categories and subcategories with its image.
        // $categories = Category::with('image')->with('subcategories.image')->get();
        $data = Banner::all();
        $popularCategories = Category::take(6)->get();

        return view('shop.index')->with('data', $data)->with('popularCategories', $popularCategories);
    }

    /**
     * Handles /shop/product/{product-slug}
     */
    public function product(Request $request, $slug)
    {
        // if ($request->has('color')) {
        //     // TODO: Change image and other related info if color is specified.
        //     return 'Work in progress.';
        // } else {
        //     // Get matching product.
        //     $product = Product::where('name_slug', $slug)->with('images')->first();
        // }
        // // return $product;
        // return view('shop.product')->with('product', $product);

        // dd($request);
        $panelId = $request->query('panel');

        $product = Product::where('name_slug', $slug)
            ->with('images')
            ->firstOrFail();

        $panelProduct = PanelProduct::where('global_product_id', $product->id)
            ->where('panel_account_id', $panelId)
            ->firstOrFail();

        return view('shop.product')
            ->with('product', $product)
            ->with('panelProduct', $panelProduct);
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
        $category = Category::where('slug', $topLevelSlug)->first();
        $childCategories = $category->childCategories->take(6);
        $categoryLevel = 1;

        return view('shop.catalog.catalog')
            ->with('category', $category)
            ->with('childCategories', $childCategories)
            ->with('categoryLevel', $categoryLevel);
    }

    /**
     * Handles /shop/category/[category-name]/[category-name]
     */
    public function secondLevelCategory($topLevelSlug, $secondLevelSlug)
    {
        $category = Category::where('slug', $secondLevelSlug)->first();
        $childCategories = $category->childCategories->take(6);
        $categoryLevel = 2;

        return view('shop.catalog.catalog')
            ->with('category', $category)
            ->with('childCategories', $childCategories)
            ->with('categoryLevel', $categoryLevel);
    }

    /**
     * Handles /shop/category/[category-name]/[category-name]/[category-name]
     */
    public function thirdLevelCategory($topLevelSlug, $secondLevelSlug, $thirdLevelSlug)
    {
        $category = Category::where('slug', $thirdLevelSlug)->first();
        $parentCategory = $category->parentCategory;
        $childCategories = $category->childCategories->take(6);
        $categoryLevel = 3;

        return view('shop.catalog.catalog')
            ->with('category', $category)
            ->with('childCategories', $childCategories)
            ->with('parentCategory', $parentCategory)
            ->with('categoryLevel', $categoryLevel);
    }
}
