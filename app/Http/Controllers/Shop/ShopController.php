<?php

namespace App\Http\Controllers\Shop;

use Auth;
use Illuminate\Http\Request;
use App\Models\Categories\Category;
use App\Http\Controllers\Controller;
use App\Models\Categories\ProductType;
use App\Models\Categories\SubCategory;
use App\Models\Globals\Products\Product;
use App\Models\Globals\State;
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
            $categories = Category::orderBy('position', 'ASC')->topLevelCategory();

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
        $data = Banner::all();
        $popularCategories = Category::take(6)->get();

        return view('shop.index')->with('data', $data)
            ->with('popularCategories', $popularCategories);
    }

    /****
     * Show About Us
     */
    public function aboutUs()
    {
        return view('shop.footer-pages.about-us');
    }

    /**Show Workforce Page***/
    public function workforce()
    {
        return view('shop.footer-pages.workforce');
    }

    /*Show Bujishu Service Page**/
    public function bujishuService()
    {
        return view('shop.footer-pages.bujishu-service');
    }

    /*Show FAQ Page**/
    public function faq()
    {
        return view('shop.footer-pages.faq');
    }

    /***Return privacy policy**/

    public function privacyPolicy()
    {
        return view('shop.footer-pages.privacy-policy');
    }

    /***Our Vision,Culture and Value***/
    public function visionCultureValue(){
        return view('shop.footer-pages.vision-culture-value');
    }

    /*****Work in Progress***/
    public function workInProgress(){
        return view('shop.work-in-progress');
    }

    /**
     * Handles /shop/product/{product-slug}
     */
    public function product(Request $request, $slug)
    {
        $panelId = $request->query('panel');

        $product = Product::where('name_slug', $slug)
            ->with('images')
            ->firstOrFail();

        $panelProduct = PanelProduct::where('global_product_id', $product->id)
            ->where('panel_account_id', $panelId)
            ->firstOrFail();

        $category = $product->categories->first();

        $relatedProducts = $category->products->where('name_slug', '!=', $slug)->where('product_status', 1)->take(6);

        $user = User::find(Auth::user()->id);

        $customer = $user->userInfo;

        $states = State::all();

        return view('shop.product')
            ->with('product', $product)
            ->with('panelProduct', $panelProduct)
            ->with('relatedProducts', $relatedProducts)
            ->with('customer', $customer)
            ->with('states', $states);
        // ->with('products', $products);
    }

    /**
     * Handles editing address on shop page.
     */
    public function productChangeAddress(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $userAddress = $user->userInfo->shippingAddress;

        $userAddress->address_1 = $request->input('address_1');
        $userAddress->address_2 = $request->input('address_2');
        $userAddress->address_3 = $request->input('address_3');
        $userAddress->postcode = $request->input('postcode');
        $userAddress->city = $request->input('city');
        $userAddress->state_id = $request->input('state_id');
        $userAddress->save();

        $cartItems = $user->carts->where('status', 2001);

        foreach ($cartItems as $cartItem) {
            $product = $cartItem->product;
            if ($product->deliveries->count() > 0) {
                $deliveryFee = $product->deliveries->where('state_id', $userAddress->state_id)->first();

                if ($deliveryFee) {
                    $cartItem->disabled = 0;
                } else {
                    $cartItem->delivery_fee = 0;
                    $cartItem->disabled = 2;
                }
            } else {
                $cartItem->delivery_fee = 0;
                $cartItem->disabled = 2;
            }

            $cartItem->save();
        }

        return redirect()->back();
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

        $getCartQuantity = $getCartQuantity->where('user_id', $user->id)->where('status', 2001)->sum('quantity');
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

        $getCartQuantity = $getCartQuantity->where('user_id', $user->id)->where('status', 2001)->sum('quantity');
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

    public function renovationCategory()
    {
        // Get user
        $user = User::find(Auth::user()->id);
        // Check if the exact item is already in the cart..
        $getCartQuantity = new Cart;

        $getCartQuantity = $getCartQuantity->where('user_id', $user->id)->where('status', 2001)->sum('quantity');

        return view('shop.renovation.renovation')
            ->with('getCartQuantity', $getCartQuantity);
    }

    /**
     * Handles /shop/product/interior-design
     */
    public function interiorDesign(Request $request)
    {
        $panelId = 1918000020;

        $product = Product::where('name_slug', 'renovation')
            ->with('images')
            ->firstOrFail();

        $panelProduct = PanelProduct::where('global_product_id', $product->id)
            ->where('panel_account_id', $panelId)
            ->firstOrFail();

        $category = $product->categories->first();

        $relatedProducts = $category->products->where('name_slug', '!=', 'renovation')->take(6);

        return view('.shop.temp.interior-design')
            ->with('product', $product)
            ->with('panelProduct', $panelProduct)
            ->with('relatedProducts', $relatedProducts);
    }

    /**
     * Handles /shop/product/interior-design/store
     */
    public function interiorDesignStore(Request $request)
    {
        // Get user
        $user = User::find(Auth::user()->id);

        // Get product
        $product = PanelProduct::find($request->input('product_id'));

        // Check if the exact item is already in the cart..
        $existingCartItem = new Cart;

        $existingCartItem = $existingCartItem->where('user_id', $user->id);

        $existingCartItem->where('product_id', $product->id);

        $existingCartItem = $existingCartItem->where('status', 2001)->first();

        // If item doesn't exist in cart..
        if ($existingCartItem == null) {
            // Initialize product information array.
            $productInformation = array();

            // Create a new cart item.
            $newCartItem = new Cart;
            $newCartItem->user_id = $user->id;
            $newCartItem->product_id = $product->id;

            $price = $request->input('price');
            $price = str_replace('.', '', $price);

            $newCartItem->product_information = $productInformation;
            $newCartItem->quantity = 1;
            $newCartItem->delivery_fee = $product->delivery_fee;
            $newCartItem->installation_fee = $product->installation_fee;
            $newCartItem->unit_price = $price;
            $newCartItem->subtotal_price = $price;
            $newCartItem->save();

            $cartItemId = $newCartItem->id;
        } else {
            // If item exist in cart..
            // Add to the existing quantity.
            $existingCartItem->quantity = $existingCartItem->quantity + 1;
            // Re calculate the total price.
            $existingCartItem->subtotal_price = $existingCartItem->quantity * $existingCartItem->unit_price;
            $existingCartItem->save();

            $cartItemId = $existingCartItem->id;
        }

        return redirect('/shop/cart?buynow=' . $cartItemId);
    }


    public function delhubdigital()
    {
        return view('shop.delhub-digital');
    }
}
