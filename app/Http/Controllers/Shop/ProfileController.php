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

    // Returns edit page for user profile 

    public function edit(){

        $customerInfo= User::find(Auth::user()->id);
        return view('shop.customer-dashboard.profile.edit')->with('customerInfo',$customerInfo);
    }

    // Update user profile information
    public function updateProfile(Request $request,$id){

        $this->validate($request, array(
            'full_name' => 'required',
            'billing_address_1' => 'required',
            'billing_address_2' => 'required',
            'billing_address_3' => 'required',
            'billing_postcode' => 'required',
            'billing_city' => 'required',
            'shipping_address_1' => 'required',
            'shipping_address_2' => 'required',
            'shipping_address_3' => 'required',
            'shipping_postcode' => 'required',
            'shipping_city' => 'required',
            'mobile_phone' => 'required'
        ));

        $customerInfo = new User();
        $customerInfo = User::findOrFail($id);
       
       $customerInfo->userInfo->full_name = $request->input('full_name');
       $customerInfo->userInfo->mailingAddress->address_1 = $request->input('billing_address_1');
       $customerInfo->userInfo->mailingAddress->address_2 = $request->input('billing_address_2');
       $customerInfo->userInfo->mailingAddress->address_3 = $request->input('billing_address_3');
       $customerInfo->userInfo->mailingAddress->postcode = $request->input('billing_postcode');
       $customerInfo->userInfo->mailingAddress->city = $request->input('billing_city');
       $customerInfo->userInfo->shippingAddress->address_1 = $request->input('shipping_address_1');
       $customerInfo->userInfo->shippingAddress->address_2 = $request->input('shipping_address_2');
       $customerInfo->userInfo->shippingAddress->address_3 = $request->input('shipping_address_3');
       $customerInfo->userInfo->shippingAddress->postcode = $request->input('shipping_postcode');
       $customerInfo->userInfo->shippingAddress->city = $request->input('shipping_city');
       $customerInfo->userInfo->mobileContact->contact_num=$request->input('mobile_phone');
       $customerInfo->save();
       dd($request);
       dd("profile updated");
        if ($customerInfo) {
            return back()->with(['successful_message' => 'Profile updated successfully']);
        } else {
            return back()->with(['error_message' => 'Failed to update profile']);
        }

    }
}
