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
    public function index()
    {
        $user = User::find(Auth::user()->id);

        $carts = $user->carts->where('status', 2001);

        return view('shop.cart.partials.shopping-cart-item')->with('cartItems', $carts);
    }

    /**
     * Get total item count in a user's cart.
     */
    public function getTotalCartQuantity($id)
    {
        $user = User::find($id);
        $cartQuantity = $user->carts->where('status', 2001)->sum('quantity');

        $data['status'] = 'OK';
        $data['message'] = 'Get request successful.';
        $data['data'] = $cartQuantity;

        return response()->json($data, 200);
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

    /**
     * Update cart quantity.
     */
    public function updateQuantity(Request $request, $id)
    {
        $cartItem = Cart::find($id);
        $cartItem->quantity = $request->input('quantity');
        $cartItem->subtotal_price = $cartItem->quantity * $cartItem->unit_price;
        $cartItem->save();

        return $cartItem;
    }
}
