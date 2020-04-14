<?php

namespace App\Http\Controllers\WEB\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users\Customers\Cart;
use App\Models\Users\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Get user's cart.
     */
    public function index(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $carts = $user->carts->where('status', 2001);

        // return $carts->where('status', 2001);

        return view('shop.cart.partials.shopping-cart-item')->with('cartItems', $carts);
    }

    /**
     * Delete a cart item.
     */
    public function remove($id)
    {
        $item = Cart::find($id);
        $item->status = 2002;
        $item->save();

        return $item;
    }

    /** Update cart quantity after deleting a cart **/
    public function removeCartQuantity(Request $request){
        $user = User::find(Auth::user()->id);

        $getCartQuantity = new Cart;

       $getCartQuantity = $getCartQuantity->where('user_id', $user->id)->where('status',2001)->sum('quantity');

        // return $carts->where('status', 2001);

        return view('layouts.shop.navigation.navigation')->with('getCartQuantity', $getCartQuantity);
    }
}
