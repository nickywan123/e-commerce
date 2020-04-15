<?php

namespace App\Http\Controllers\Shop;

use Auth;
use Carbon\Carbon;

use PDF;

use App\Models\Users\User;
use App\Models\Orders\Order;
use Illuminate\Http\Request;
use App\Models\Categories\Category;
use App\Http\Controllers\Controller;

use App\Models\Users\Customers\Cart;

use Illuminate\Support\Facades\View;
use App\Jobs\Orders\ProcessOrderEmail;
use App\Jobs\Emails\Orders\NewOrderSendEmail;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Get user
       $user = User::find(Auth::user()->id);
       // Check if the exact item is already in the cart..
       $getCartQuantity = new Cart;

       $getCartQuantity = $getCartQuantity->where('user_id', $user->id)->where('status',2001)->sum('quantity');
        $user = User::find(Auth::user()->id);
        $purchases = $user->purchases;
        // return $purchases;
        return view('shop.order.index')->with('purchases', $purchases)->with('getCartQuantity',$getCartQuantity);
    }

    /****Display orders for customer dashboard  ****/

   public function customerOrders(){
    $user = User::find(Auth::user()->id);
    $purchases = $user->purchases;
    // $annualOrders= $user->purchases->orders->whereYear('created_at', '=', 2020)->get();
    return view('shop.profile.orders')->with('purchases', $purchases);
   }


   
/*** Display order status for customer dashboard*******/

    public function orderStatus(){
        return "ORDER STATUS";
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
        $orderId = null;

        // Get cart items based on array of id provided in request.
        $cartItems = Cart::whereIn('id', $request->input('cartItemId'))->get();

        foreach ($cartItems as $cartItem) {
            // Order ID setup.
            $now = Carbon::now();
            $year = $now->format('Y');
            $month = $now->format('m');
            $randomInteger = mt_rand(10000000000, 99999999999);

            $orderId = $year . '-' . $month . '-' . $randomInteger;
            // Check if the order id already exist.
            $order = Order::where('order_id', $orderId)->first();

            // If order id exist..
            if ($order != null) {
                // Generate another order id.
                $randomInteger = mt_rand(10000000000, 99999999999);
                $orderId = $year . '-' . $month . '-' . $randomInteger;
            } else {
                // If not, the create a new order.
                // Create a new order.
                $newOrder = new Order;
                $newOrder->order_id = $orderId;
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
                $newOrder->status_id = 1001;
                $newOrder->save();

                // If the order is saved..
                if ($newOrder->save()) {
                    // Change the cart item status.
                    $cartItem->status = 2003;
                    $cartItem->save();

                    // Set customer details for email..
                    $customerEmailDetails = [
                        'toEmail' => $user->email,
                        'orderId' => $newOrder->order_id
                    ];

                    // Dispatch a queue job for email..
                    dispatch(new NewOrderSendEmail($newOrder, $customerEmailDetails));
                }
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
