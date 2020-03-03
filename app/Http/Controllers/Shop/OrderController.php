<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\View;

use Auth;
use App\Models\Categories\Category;
use App\Models\Categories\SubCategory;
use App\Models\Categories\ProductType;
use App\Models\Orders\Order;
use App\Models\Users\Cart;
use App\Models\Users\User;

class OrderController extends Controller
{
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
                $this->cart = Auth::user()->cartItems->where('status', 2001);
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->user_id);
        $orders = $user->orders;

        return view('shop.order.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create a record after a customer placed an order.
        // return $request->input('cartItemId');

        // Variables initialization.
        $user = User::find(Auth::user()->user_id);
        $productInformation = array();

        // Get cart items based on array of id provided in request.
        $cartItems = Cart::whereIn('id', $request->input('cartItemId'))->get();

        foreach ($cartItems as $cartItem) {
            // Create a new order.
            $newOrder = new Order;
            $newOrder->order_id = 'Order ID Here, Generate! New ' . $cartItem->id;
            $newOrder->user_id = $user->user_id;
            $newOrder->dealer_id = 10; // Get dealer ID from user info.
            $newOrder->panel_id = $cartItem->product->panel->user_id;
            $newOrder->product_id = $cartItem->product->id;
            // Create an array of product information..
            $productInformation = array(
                "product_color_id" => $cartItem->product_color_id,
                "product_color_name" => $cartItem->product_color,
                "product_dimension_id" => $cartItem->product_dimension_id,
                "product_dimension" => $cartItem->product_dimension,
                "product_length_id" => $cartItem->product_length_id,
                "product_length" => $cartItem->product_length
            );
            // Product information will be stored as an array. See attribute casting on Laravel documentation.
            // protected $casts = [ 'product_information' => 'array']
            $newOrder->product_information = $productInformation;
            $newOrder->product_quantity = $cartItem->quantity;
            $newOrder->order_price = $cartItem->total_price;
            $newOrder->order_status = 1;
            $newOrder->save();

            if ($newOrder->save()) {
                $cartItem->status = 2003;
                $cartItem->save();
            }
        }

        return redirect('/shop/order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
