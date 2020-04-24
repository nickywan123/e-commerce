<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Models\Products\Product as PanelProduct;
use App\Models\Users\Customers\Cart;
use App\Models\Users\User;
use App\Models\Categories\Category;
use Illuminate\Support\Facades\View;

class CartController extends Controller
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
    public function index(Request $request)
    {
        // Get user
        $user = User::find(Auth::user()->id);
        // Check if the exact item is already in the cart..
        $getCartQuantity = new Cart;

        $getCartQuantity = $getCartQuantity->where('user_id', $user->id)->where('status', 2001)->sum('quantity');

        return view('shop.cart.cart')
            ->with('getCartQuantity', $getCartQuantity);
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
        // Get user
        $user = User::find(Auth::user()->id);

        // Get product
        $product = PanelProduct::find($request->input('product_id'));

        // Variables initiliazation.
        $color = null;
        $size = null;
        $temperature = null;

        // If the post request has product color id value in it..
        if ($request->input('product_attribute_color') != null) {
            // Get selected product color.
            $color = $product->colorAttributes->where('id', $request->input('product_attribute_color'))->first();

            // Set color id for checking purposes.
            $colorId = $color->id;
        }

        // If the post request has product dimension id value in it..
        if ($request->input('product_attribute_size') != null) {
            // Get selected product dimension.
            $size = $product->sizeAttributes->where('id', $request->input('product_attribute_size'))->first();

            // Set dimension id for checking purposes.
            $sizeId = $size->id;
        }

        // If the post request has product length id value in it..
        if ($request->input('product_attribute_temperature') != null) {
            // Get selected product length.
            $temperature = $product->lightTemperatureAttributes
                ->where('id', $request->input('product_attribute_temperature'))->first();

            // Set length id for checking purposes.
            $temperatureId = $temperature->id;
        }

        // Check if the exact item is already in the cart..
        $existingCartItem = new Cart;

        $existingCartItem = $existingCartItem->where('user_id', $user->id);

        $existingCartItem->where('product_id', $product->id);

        if ($color != null) {
            $existingCartItem->where('product_information->product_color_id', $colorId);
        }
        if ($size != null) {
            $existingCartItem->where('product_information->product_size_id', $sizeId);
        }
        if ($temperature != null) {
            $existingCartItem->where('product_information->product_temperature_id', $temperatureId);
        }

        $existingCartItem = $existingCartItem->where('status', 2001)->first();

        // If item doesn't exist in cart..
        if ($existingCartItem == null) {
            // Initialize product information array.
            $productInformation = array();

            // Create a new cart item.
            $newCartItem = new Cart;
            $newCartItem->user_id = $user->id;
            $newCartItem->product_id = $product->id;

            $price = 0;
            // Check if the post request has product color id in it..
            if ($color != null) {
                // If yes, assign the color id and name
                $productInformation['product_color_id'] = $color->id;
                $productInformation['product_color_name'] = $color->attribute_name;
            }
            // Check if the post request has product dimension id in it..
            if ($size != null) {
                // If yes, assign the dimension id and concate the width, height, depth and measurement unit.
                $productInformation['product_size_id'] = $size->id;
                $productInformation['product_size'] = $size->attribute_name;
            }
            // Check if the post request has product length id in it..
            if ($temperature != null) {
                // If yes, assign the length id and concate the length and measurement unit.
                $productInformation['product_temperature_id'] = $temperature->id;
                $productInformation['product_temperature'] = $temperature->attribute_name;
            }

            // if ($color != null) {
            //     if ($color->price != 0) {
            //         $price = $color->price;
            //     } else {
            //         $price = $product->price;
            //     }
            // } elseif ($size != null) {
            //     if ($size->price != 0) {
            //         $price = $size->price;
            //     } else {
            //         $price = $product->price;
            //     }
            // } elseif ($temperature != null) {
            //     if ($temperature->price != 0) {
            //         $price = $temperature->price;
            //     } else {
            //         $price = $product->price;
            //     }
            // } else {
            //     $price = $product->price;
            // }

            if ($size != null) {
                if ($size->price != 0) {
                    $price = $size->price;
                } else {
                    $price = $product->price;
                }
            } else {
                $price = $product->price;
            }

            $newCartItem->product_information = $productInformation;
            $newCartItem->quantity = $request->input('productQuantity');
            $newCartItem->delivery_fee = $product->delivery_fee;
            $newCartItem->installation_fee = $product->installation_fee;
            $newCartItem->unit_price = $price;
            $newCartItem->subtotal_price = $price * $request->input('productQuantity');
            $newCartItem->save();
        } else {
            // If item exist in cart..
            // Add to the existing quantity.
            $existingCartItem->quantity = $existingCartItem->quantity + $request->input('productQuantity');
            // Re calculate the total price.
            $existingCartItem->subtotal_price = $existingCartItem->quantity * $existingCartItem->unit_price;
            $existingCartItem->save();
        }

        return redirect()->back();
    }

    /**
     * 
     */
    public function buyNowStore(Request $request)
    {
        // Get user
        $user = User::find(Auth::user()->id);

        // Get product
        $product = PanelProduct::find($request->input('product_id'));

        // Variables initiliazation.
        $color = null;
        $size = null;
        $temperature = null;

        // If the post request has product color id value in it..
        if ($request->input('product_attribute_color') != null) {
            // Get selected product color.
            $color = $product->colorAttributes->where('id', $request->input('product_attribute_color'))->first();

            // Set color id for checking purposes.
            $colorId = $color->id;
        }

        // If the post request has product dimension id value in it..
        if ($request->input('product_attribute_size') != null) {
            // Get selected product dimension.
            $size = $product->sizeAttributes->where('id', $request->input('product_attribute_size'))->first();

            // Set dimension id for checking purposes.
            $sizeId = $size->id;
        }



        // If the post request has product length id value in it..
        if ($request->input('product_attribute_temperature') != null) {
            // Get selected product length.
            $temperature = $product->lightTemperatureAttributes
                ->where('id', $request->input('product_attribute_temperature'))->first();

            // Set length id for checking purposes.
            $temperatureId = $temperature->id;
        }

        // Check if the exact item is already in the cart..
        $existingCartItem = new Cart;

        $existingCartItem = $existingCartItem->where('user_id', $user->id);

        $existingCartItem->where('product_id', $product->id);

        if ($color != null) {
            $existingCartItem->where('product_information->product_color_id', $colorId);
        }
        if ($size != null) {
            $existingCartItem->where('product_information->product_size_id', $sizeId);
        }
        if ($temperature != null) {
            $existingCartItem->where('product_information->product_temperature_id', $temperatureId);
        }

        $existingCartItem = $existingCartItem->where('status', 2001)->first();




        // If item doesn't exist in cart..
        if ($existingCartItem == null) {
            // Initialize product information array.
            $productInformation = array();

            // Create a new cart item.
            $newCartItem = new Cart;
            $newCartItem->user_id = $user->id;
            $newCartItem->product_id = $product->id;

            $price = 0;
            // Check if the post request has product color id in it..
            if ($color != null) {
                // If yes, assign the color id and name
                $productInformation['product_color_id'] = $color->id;
                $productInformation['product_color_name'] = $color->attribute_name;
            }
            // Check if the post request has product dimension id in it..
            if ($size != null) {
                // If yes, assign the dimension id and concate the width, height, depth and measurement unit.
                $productInformation['product_size_id'] = $size->id;
                $productInformation['product_size'] = $size->attribute_name;
            }
            // Check if the post request has product length id in it..
            if ($temperature != null) {
                // If yes, assign the length id and concate the length and measurement unit.
                $productInformation['product_temperature_id'] = $temperature->id;
                $productInformation['product_temperature'] = $temperature->attribute_name;
            }

            if ($color != null) {
                if ($color->price != 0) {
                    $price = $color->price;
                } else {
                    $price = $product->price;
                }
            } elseif ($size != null) {
                if ($size->price != 0) {
                    $price = $size->price;
                } else {
                    $price = $product->price;
                }
            } elseif ($temperature != null) {
                if ($temperature->price != 0) {
                    $price = $temperature->price;
                } else {
                    $price = $product->price;
                }
            } else {
                $price = $product->price;
            }

            $newCartItem->product_information = $productInformation;
            $newCartItem->quantity = $request->input('productQuantity');
            $newCartItem->delivery_fee = $product->delivery_fee;
            $newCartItem->installation_fee = $product->installation_fee;
            $newCartItem->unit_price = $price;
            $newCartItem->subtotal_price = $price * $request->input('productQuantity');
            $newCartItem->save();

            $cartItemId = $newCartItem->id;
        } else {
            // If item exist in cart..
            // Add to the existing quantity.
            $existingCartItem->quantity = $existingCartItem->quantity + $request->input('productQuantity');
            // Re calculate the total price.
            $existingCartItem->subtotal_price = $existingCartItem->quantity * $existingCartItem->unit_price;
            $existingCartItem->save();

            $cartItemId = $existingCartItem->id;
        }

        return redirect('/shop/cart?buynow=' . $cartItemId);
    }

    /**
     * Display the number of quantity in the cart for the user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function getCartQuantity()
    // {
    //      // Get user
    //      $user = User::find(Auth::user()->id);
    //     // Check if the exact item is already in the cart..
    //     $getCartQuantity = new Cart;

    //     $getCartQuantity = $getCartQuantity->where('user_id', $user->id)->quantity;



    //     return view('layouts.shop.navigation.navigation')->with('getCartQuantity',$getCartQuantity);


    // }

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
        $cartItem = Cart::find($id);
        $cartItem->status = 2002;
        $cartItem->save();

        return $cartItem;
    }
}
