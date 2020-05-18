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

    public function index()
    {
        $customerInfo = User::find(Auth::user()->id);
        //$customerInfo= $customerInfo->userInfo->account_id;

        //$customerInfo= $customerInfo->where('bujishu_id',$bujishu_id)->first();

        return view('shop.customer-dashboard.profile.index')->with('customerInfo', $customerInfo);
    }

    // Returns edit page for user profile 

    public function edit()
    {

        $customerInfo = User::find(Auth::user()->id);
        return view('shop.customer-dashboard.profile.edit')->with('customerInfo', $customerInfo);
    }

    // Update user profile information
    public function updateProfile(Request $request, $id)
    {

        $this->validate($request, array(

            'billing_address_1' => 'required',
            'billing_address_2' => 'required',
            'billing_address_3' => 'required',
            'billing_postcode' => 'required|digits:5',
            'billing_city' => 'required',
            'shipping_address_1' => 'required',
            'shipping_address_2' => 'required',
            'shipping_address_3' => 'required',
            'shipping_postcode' => 'required|digits:5',
            'shipping_city' => 'required',
            'mobile_phone' => 'required|digits:10'
        ));


        $customerInfo = User::findOrFail($id);


        $name = $customerInfo->userInfo;
        $shipTo = $customerInfo->userInfo->shippingAddress;
        $billTo = $customerInfo->userInfo->mailingAddress;
        $contact = $customerInfo->userInfo->mobileContact;

        $name->full_name = $request->input('full_name');
        $name->save();


        $billTo->address_1 = $request->input('billing_address_1');
        $billTo->address_2 = $request->input('billing_address_2');
        $billTo->address_3 = $request->input('billing_address_3');
        $billTo->postcode = $request->input('billing_postcode');
        $billTo->city = $request->input('billing_city');
        $billTo->save();

        $shipTo->address_1 = $request->input('shipping_address_1');
        $shipTo->address_2 = $request->input('shipping_address_2');
        $shipTo->address_3 = $request->input('shipping_address_3');
        $shipTo->postcode = $request->input('shipping_postcode');
        $shipTo->city = $request->input('shipping_city');
        $shipTo->save();

        $contact->contact_num = $request->input('mobile_phone');
        $contact->save();




        if ($name && $billTo && $shipTo && $contact) {
            return redirect()->route('shop.dashboard.customer.profile')->with(['successful_message' => 'Profile updated successfully'])->with('customerInfo', $customerInfo);
        } else {
            return redirect()->route('shop.dashboard.customer.profile')->with(['error_message' => 'Failed to update profile'])->with('customerInfo', $customerInfo);
        }
    }
}
