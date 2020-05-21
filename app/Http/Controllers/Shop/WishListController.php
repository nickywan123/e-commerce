<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users\Customers\Favorite;
use App\Models\Users\User;
use Auth;

class WishListController extends Controller
{

    /***Add to item to perfect wishlist  ****/
    public function store($product_id)
    {
        // Get user id
        $userID = Auth::user()->id;


        // Store item perfect list to favourite table
        $perfect_list = new Favorite;
        $perfect_list->user_id = $userID;
        $perfect_list->product_id = $product_id;
        $perfect_list->save();

        if ($perfect_list) {
            return back()->with(['successful_message' => 'Added to perfect list ']);
        } else {
            return back()->with(['error_message' => 'Please try again']);
        }
    }
}
