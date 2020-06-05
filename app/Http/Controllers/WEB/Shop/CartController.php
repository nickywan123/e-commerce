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

        $userInfo = $user->userInfo;

        $panel = $cartItem->product->panel;

        $product = PanelProduct::find($cartItem->product_id);

        $userShipping = $userInfo->shippingAddress;

        $productCategories = $product
            ->parentProduct
            ->categories;

        $productCategoriesArray = [];

        foreach ($productCategories as $key => $productCategory) {
            $productCategoriesArray[$key] = $productCategory->id;
        }

        $freeDeliveryMinPrice = $product
            ->panel
            ->categoriesWithMinPrice
            ->whereIn('category_id', $productCategoriesArray)
            ->first();

        $activeCartItems = Cart::where('user_id', $user->id)
            ->where('status', 2001)
            ->whereHas('product.panel', function ($q) use ($panel) {
                $q->where('account_id', $panel->account_id);
            })
            ->whereHas('product.parentProduct', function ($q) use ($productCategoriesArray) {
                $q->whereHas('categories', function ($q) use ($productCategoriesArray) {
                    $q->whereIn('categories.id', $productCategoriesArray);
                });
            })
            ->get();

        $totalSubtotalPrice = 0;

        foreach ($activeCartItems as $activeCartItem) {
            $totalSubtotalPrice = $totalSubtotalPrice + $activeCartItem->subtotal_price;
        }

        $isDeliveryFree = 0;

        if ($freeDeliveryMinPrice) {
            if ($totalSubtotalPrice < $freeDeliveryMinPrice->free_delivery_min_price && $freeDeliveryMinPrice->delivery_fee_no_purchase == 1) {
                $isDeliveryFree = 2;
            } elseif ($totalSubtotalPrice >= $freeDeliveryMinPrice->free_delivery_min_price) {
                $isDeliveryFree = 1;
            } else {
                $isDeliveryFree = 0;
            }
        }

        if ($isDeliveryFree == 1) {
            foreach ($activeCartItems as $activeCartItem) {
                $activeCartItem->delivery_fee = 0;
                $activeCartItem->disabled = 0;
                $activeCartItem->save();
            }
        } elseif ($isDeliveryFree == 2) {
            foreach ($activeCartItems as $activeCartItem) {
                $activeCartItem->delivery_fee = 0;
                $activeCartItem->disabled = 1;
                $activeCartItem->save();
            }
        } else {
            foreach ($activeCartItems as $activeCartItem) {
                $deliveryFeeForProduct = $activeCartItem
                    ->product
                    ->deliveries
                    ->where('state_id', $userShipping->state_id)
                    ->first();

                $activeCartItem->delivery_fee = $deliveryFeeForProduct->delivery_fee * $activeCartItem->quantity;
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

        $productCategories = $product
            ->parentProduct
            ->categories;

        $productCategoriesArray = [];

        foreach ($productCategories as $key => $productCategory) {
            $productCategoriesArray[$key] = $productCategory->id;
        }

        $freeDeliveryMinPrice = $product
            ->panel
            ->categoriesWithMinPrice
            ->whereIn('category_id', $productCategoriesArray)
            ->first();

        $activeCartItems = Cart::where('user_id', $user->id)
            ->where('status', 2001)
            ->whereHas('product.panel', function ($q) use ($panel) {
                $q->where('account_id', $panel->account_id);
            })
            ->whereHas('product.parentProduct', function ($q) use ($productCategoriesArray) {
                $q->whereHas('categories', function ($q) use ($productCategoriesArray) {
                    $q->whereIn('categories.id', $productCategoriesArray);
                });
            })
            ->get();

        $totalSubtotalPrice = 0;

        foreach ($activeCartItems as $activeCartItem) {
            $totalSubtotalPrice = $totalSubtotalPrice + $activeCartItem->subtotal_price;
        }

        $isDeliveryFree = 0;

        if ($freeDeliveryMinPrice) {
            if ($totalSubtotalPrice < $freeDeliveryMinPrice->free_delivery_min_price && $freeDeliveryMinPrice->delivery_fee_no_purchase == 1) {
                $isDeliveryFree = 2;
            } elseif ($totalSubtotalPrice >= $freeDeliveryMinPrice->free_delivery_min_price) {
                $isDeliveryFree = 1;
            } else {
                $isDeliveryFree = 0;
            }
        }

        if ($isDeliveryFree == 1) {
            foreach ($activeCartItems as $activeCartItem) {
                $activeCartItem->delivery_fee = 0;
                $activeCartItem->disabled = 0;
                $activeCartItem->save();
            }
        } elseif ($isDeliveryFree == 2) {
            foreach ($activeCartItems as $activeCartItem) {
                $activeCartItem->delivery_fee = 0;
                $activeCartItem->disabled = 1;
                $activeCartItem->save();
            }
        } else {
            foreach ($activeCartItems as $activeCartItem) {
                $deliveryFeeForProduct = $activeCartItem
                    ->product
                    ->deliveries
                    ->where('state_id', $userShipping->state_id)
                    ->first();

                $activeCartItem->delivery_fee = $deliveryFeeForProduct->delivery_fee * $activeCartItem->quantity;
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
