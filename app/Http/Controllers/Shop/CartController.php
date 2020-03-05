<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Models\Products\Product;
use App\Models\Users\Cart;
use App\Models\Users\User;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // return $request;
        $user = User::find(Auth::user()->user_id);
        $product = Product::find($request->input('productId'));

        // Variables initiliazation.
        $color = null;
        $dimension = null;
        $length = null;
        $colorId = null;
        $dimensionId = null;
        $lengthId = null;


        // If the post request has product color id value in it..
        if ($request->has('productColorId')) {
            // Get selected product color.
            $color = $product->colors->where('id', $request->input('productColorId'))->first();

            // Set color id for checking purposes.
            $colorId = $color->id;
        }
        // If the post request has product dimension id value in it..
        if ($request->has('productDimensionId')) {
            // Get selected product dimension.
            $dimension = $product->dimensions->where('id', $request->input('productDimensionId'))->first();

            // Set dimension id for checking purposes.
            $dimensionId = $dimension->id;
        }
        // If the post request has product length id value in it..
        if ($request->has('productLengthId')) {
            // Get selected product length.
            $length = $product->lengths->where('id', $request->input('productLengthId'))->first();

            // Set length id for checking purposes.
            $lengthId = $length->id;
        }

        // Check if the exact item already is in the card..
        $existingCartItem = Cart::where('user_id', $user->user_id)
            ->where('product_id', $product->id)
            ->where('product_color_id', $colorId)
            ->where('product_dimension_id', $dimensionId)
            ->where('product_length_id', $lengthId)
            ->where('status', 2001)
            ->first();

        // If item doesn't exist in cart..
        if ($existingCartItem == null) {
            // Create a new cart item.
            $newCartItem = new Cart;
            $newCartItem->user_id = $user->user_id;
            $newCartItem->product_id = $product->id;

            // Check if the post request has product color id in it..
            if ($request->has('productColorId')) {
                // If yes, assign the color id and name
                $newCartItem->product_color_id = $color->id;
                $newCartItem->product_color = $color->color_name;
            }
            // Check if the post request has product dimension id in it..
            if ($request->has('productDimensionId')) {
                // If yes, assign the dimension id and concate the width, height, depth and measurement unit.
                $newCartItem->product_dimension_id = $dimension->id;
                $newCartItem->product_dimension = $dimension->width . 'x' . $dimension->height . 'x' . $dimension->depth . 'x' . $dimension->measurement_unit;
            }
            // Check if the post request has product length id in it..
            if ($request->has('productLengthId')) {
                // If yes, assign the length id and concate the length and measurement unit.
                $newCartItem->product_length_id = $length->id;
                $newCartItem->product_length = $length->length . ' ' . $length->measurement_unit;
            }

            $newCartItem->quantity = $request->input('productQuantity');
            $newCartItem->unit_price = $product->price;
            $newCartItem->total_price = $product->price * $request->input('productQuantity');

            // TODO: Check if shipping fee is needed.
            $newCartItem->shipping_fee = 0;
            $newCartItem->save();
        } else {
            // If item exist in cart..
            // Add to the existing quantity.
            $existingCartItem->quantity = $existingCartItem->quantity + $request->input('productQuantity');
            // Re calculate the total price.
            $existingCartItem->total_price = $existingCartItem->quantity * $existingCartItem->unit_price;
            $existingCartItem->save();
        }

        return back();
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
        // Change status to 2002
    }
}
