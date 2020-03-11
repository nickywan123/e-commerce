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
     * Get user's cart
     */
    public function index(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $carts = $user->carts->with('product.images');


        return $carts;
    }
}
