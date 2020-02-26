<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
use App\Models\Products\Product;
use App\Models\Users\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get current user.
        $user = User::find(Auth::user()->id);

        // Get user's cart.
        $cart = $user->cartItems;

        return $cart;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        // Get current user.
        $user = User::find(Auth::user()->id);

        // Get product.
        $product = Product::where('id', $id)->with('colors')->with('dimensions')->with('lengths')->first();

        // Get current user's cart.
        $currentCart = $user->cartItems;

        // Check if the exact variation of product exists
        // TODO: Add default color, dimension, length for product.
        // TODO: If /add-to-cart is called on /category/{category}
        // then check with default color, dimension, length of product.
        $matchingProductsInCart = $currentCart->where('product_id', $product->id)->count();

        // If exist, then add quantity, calculate the total price.
        if ($matchingProductsInCart > 0) {
            // Get matching product.
            $productInCart = $currentCart->where('product_id', $product->id)->first();
            // Add quantity
            $productInCart->quantity = $productInCart->quantity + 1;
            // Calculate total price.
            $productInCart->total_price = $productInCart->unit_price * $productInCart->quantity;

            $productInCart->save();
        } else {
            // Create new item in cart.
            $newProduct = new Cart;
            $newProduct->user_id = $user->id;
            $newProduct->product_id = $product->id;
            $newProduct->product_color_id = null; // TODO: Insert id of product's default color here.
            $newProduct->product_color = null; // TODO: Insert name of product's default color here.
            $newProduct->product_dimension_id = null; // TODOO: Insert id of product's default dimension here.
            $newProduct->product_dimension = null; // TODO: Insert combination of product's default width, height, depth and measurement unit here.
            $newProduct->product_length_id = null; // TODO: Insert id of product's default length here.
            $newProduct->product_length = null; // TODO: Insert combination of product's default length and measurement unit here.
            $newProduct->quantity = 1; // 1 because there is no quantity option on category page.
            $newProduct->unit_price = $product->price;
            $newProduct->total_price = $newProduct->unit_price * $newProduct->quantity;
            $newProduct->shipping_fee = 4; // TODO: Insert product's shipping fee here.
            $newProduct->save();
        }

        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Get user id
        // then get product id, get its default attributes.
        // Check if product already exist in cart,
        // Create new row of the product.


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
