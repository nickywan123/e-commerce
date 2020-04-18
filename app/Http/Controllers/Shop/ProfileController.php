<?php

namespace App\Http\Controllers\Shop;

use Auth;
use App\Models\Users\User;
use Illuminate\Http\Request;
use App\Models\Categories\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{



    protected $cart = null;
    protected $categories = null;

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

    /***Handles shop->customer profile ***/ 

    public function index(){
        $customerInfo= User::find(Auth::user()->id);
        //$customerInfo= $customerInfo->userInfo->account_id;
      
        //$customerInfo= $customerInfo->where('bujishu_id',$bujishu_id)->first();
        
        return view('shop.customer-dashboard.profile.index')->with('customerInfo',$customerInfo);
    }

}
