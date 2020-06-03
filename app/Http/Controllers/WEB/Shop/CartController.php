<?php

namespace App\Http\Controllers\WEB\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users\Customers\Cart;
use App\Models\Users\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Products\Product as PanelProduct;
use App\Models\Products\ProductDelivery;

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
        $cartItem = Cart::find($id);
        $cartItem->status = 2002;
        $cartItem->save();

        // Get user
        $user = User::find(Auth::user()->id);

        $panel = $cartItem->product->panel;

        $activeCartItems = Cart::where('user_id', $user->id)->where('status', 2001)->whereHas('product.panel', function ($q) use ($panel) {
            $q->where('account_id', $panel->account_id);
        })->get();

        $totalSubtotalPrice = 0;

        foreach ($activeCartItems as $activeCartItem) {
            $totalSubtotalPrice = $totalSubtotalPrice + $activeCartItem->subtotal_price;
        }

        if ($totalSubtotalPrice >= $panel->min_price) {
            foreach ($activeCartItems as $activeCartItem) {
                $activeCartItem->disabled = 0;
                $activeCartItem->selected = 1;
                $activeCartItem->save();
            }
        } else {
            foreach ($activeCartItems as $activeCartItem) {
                $activeCartItem->disabled = 1;
                $activeCartItem->selected = 0;
                $activeCartItem->save();
            }
        }

        return $cartItem;
    }

    /**
     * Update cart quantity.
     */
    public function updateQuantity(Request $request, $id)
    {
        $cartItem = Cart::find($id);

        // Get user
        $user = User::find(Auth::user()->id);

        // Get product
        $product = PanelProduct::find($cartItem->product_id);

        //
        $userInfo = $user->userInfo;

        // 
        $userShipping = $userInfo->shippingAddress;

        $deliveryFee = $product->deliveries->where('state_id', $userShipping->state_id)->first();

        $cartItem->quantity = $request->input('quantity');
        $cartItem->subtotal_price = $cartItem->quantity * $cartItem->unit_price;
        $cartItem->delivery_fee = $deliveryFee->delivery_fee * $request->input('quantity');
        $cartItem->save();

        $panel = $cartItem->product->panel;

        $activeCartItems = Cart::where('user_id', $user->id)->where('status', 2001)->whereHas('product.panel', function ($q) use ($panel) {
            $q->where('account_id', $panel->account_id);
        })->get();

        $totalSubtotalPrice = 0;

        foreach ($activeCartItems as $activeCartItem) {
            $totalSubtotalPrice = $totalSubtotalPrice + $activeCartItem->subtotal_price;
        }

        if ($totalSubtotalPrice >= $panel->min_price) {
            foreach ($activeCartItems as $activeCartItem) {
                $activeCartItem->disabled = 0;
                $activeCartItem->selected = 1;
                $activeCartItem->save();
            }
        } else {
            foreach ($activeCartItems as $activeCartItem) {
                $activeCartItem->disabled = 1;
                $activeCartItem->selected = 0;
                $activeCartItem->save();
            }
        }

        return $cartItem;
    }

    /**
     * Update checked status.
     */
    public function toggleSelectItem(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);

        if ($cartItem->selected == 0) {
            $cartItem->selected = 1;
        } else {
            $cartItem->selected = 0;
        }
        $cartItem->save();

        return response()->json($cartItem, 200);
    }

    /**
     * Update address.
     */
    public function updateAddress(Request $request)
    {
        // 
    }
}
