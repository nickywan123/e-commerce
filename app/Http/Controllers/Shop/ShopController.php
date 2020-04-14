<?php

namespace App\Http\Controllers\Shop;

use Auth;
use Illuminate\Http\Request;
use App\Models\Categories\Category;
use App\Http\Controllers\Controller;
use App\Models\Categories\ProductType;
use App\Models\Categories\SubCategory;
use App\Models\Globals\Products\Product;
use Illuminate\Support\Facades\View;
use App\Models\Users\User;
use App\Models\PromotionPage\Banner;
use App\Models\Products\Product as PanelProduct;
use App\Models\Users\Customers\Cart;

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

        // Get user
        $user = User::find(Auth::user()->id);
        // Check if the exact item is already in the cart..
        $getCartQuantity = new Cart;

        $getCartQuantity = $getCartQuantity->where('user_id', $user->id)->where('status',2001)->sum('quantity');


        $data = Banner::all();
        $popularCategories = Category::take(6)->get();

        return view('shop.index')->with('data', $data)
            ->with('popularCategories', $popularCategories)
            ->with('getCartQuantity', $getCartQuantity);
    }



    /**
     * Handles /shop/category/{category-slug}
     */
    public function category($categorySlug)
    {

        // Get user
        $user = User::find(Auth::user()->id);
        // Check if the exact item is already in the cart..
        $getCartQuantity = new Cart;

        $getCartQuantity = $getCartQuantity->where('user_id', $user->id)->where('status',2001)->sum('quantity');

        // Get matching category with related products and their images.
        $category = Category::where('slug', $categorySlug)->with('products.images')->first();

        // Get all categories for tree view.
        $allCategories = Category::all();

        return view('shop.catalog.category')
            ->with('category', $category)
            ->with('allCategories', $allCategories)
            ->with('getCartQuantity', $getCartQuantity);
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
        // Get user
        $user = User::find(Auth::user()->id);
        // Check if the exact item is already in the cart..
        $getCartQuantity = new Cart;

        $getCartQuantity = $getCartQuantity->where('user_id', $user->id)->where('status',2001)->sum('quantity');
        $panelId = $request->query('panel');

        $product = Product::where('name_slug', $slug)
            ->with('images')
            ->firstOrFail();

        $panelProduct = PanelProduct::where('global_product_id', $product->id)
            ->where('panel_account_id', $panelId)
            ->firstOrFail();

        $category = Category::where('slug', 'lightings')->firstOrFail();

        $products = $category->products;

        return view('shop.product')
            ->with('product', $product)
            ->with('panelProduct', $panelProduct)
            ->with('getCartQuantity', $getCartQuantity)
            ->with('products', $products);
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
        // Get user
        $user = User::find(Auth::user()->id);
        // Check if the exact item is already in the cart..
        $getCartQuantity = new Cart;

        $getCartQuantity = $getCartQuantity->where('user_id', $user->id)->where('status',2001)->sum('quantity');
        $category = Category::where('slug', $topLevelSlug)->first();
        $childCategories = $category->childCategories->take(6);
        $categoryLevel = 1;

        return view('shop.catalog.catalog')
            ->with('category', $category)
            ->with('childCategories', $childCategories)
            ->with('categoryLevel', $categoryLevel)
            ->with('getCartQuantity', $getCartQuantity);
    }

    /**
     * Handles /shop/category/[category-name]/[category-name]
     */
    public function secondLevelCategory($topLevelSlug, $secondLevelSlug)
    {
        // Get user
        $user = User::find(Auth::user()->id);
        // Check if the exact item is already in the cart..
        $getCartQuantity = new Cart;

        $getCartQuantity = $getCartQuantity->where('user_id', $user->id)->where('status',2001)->sum('quantity');
        $category = Category::where('slug', $secondLevelSlug)->first();
        $childCategories = $category->childCategories->take(6);
        $categoryLevel = 2;

        return view('shop.catalog.catalog')
            ->with('category', $category)
            ->with('childCategories', $childCategories)
            ->with('categoryLevel', $categoryLevel)
            ->with('getCartQuantity', $getCartQuantity);
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
