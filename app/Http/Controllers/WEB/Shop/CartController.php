<?php

namespace App\Http\Controllers\WEB\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users\Cart;
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
}
