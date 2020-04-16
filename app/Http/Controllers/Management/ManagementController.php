<?php

namespace App\Http\Controllers\Management;

use Auth;
use Carbon\Carbon;
use App\Models\Users\User;
use Illuminate\Http\Request;
use App\Models\Purchases\Order;
use App\Http\Controllers\Controller;

class ManagementController extends Controller
{

    // Return Shop -> Panel -> All Orders-> index
    public function index(){
 
        // Get panel

        $panel_id= User::find(Auth::user()->id);
        $panel_id= $panel_id->userInfo->account_id;
        $customerOrders = new Order;
        $customerOrders= $customerOrders->where('panel_id',$panel_id)->get();
        
        // Get the order date and current date to return pending days
    //     $today = Carbon::today()->toDateString();
    //     $date = Carbon::createFromFormat('d/m/Y',$today);
    //     $date1 = Carbon::createFromFormat('d/m/Y', '14/04/2020');
    //    $diff=Carbon::parse($date1)->diffInDays($date);

    //     dd(Carbon::today()->toDateString());
        return view("management.panel.index")->with('customerOrders',$customerOrders);
    }

    // View all orders-panel
    public function allOrders(){
     return view('management.orders.allCustOrders');
    }

    
    // View open orders-panel
    public function openOrders(){
        return view('management.orders.open');
       }
       
    // View in progress orders-panel
    public function inProgressOrders(){
        return view('management.orders.in-progress');
       }

         // View completed orders-panel
    public function completedOrders(){
        return view('management.orders.completed');
       }
       
       
    // View delivered orders-panel
    public function deliveredOrders(){
        return view('management.orders.delivered');
       }

       
    // View all cancelled-panel
    public function cancelledOrders(){
        return view('management.orders.cancelled');
       }



 // Home Page for Dealer
    public function index_dealer(){
        return view('management.dealer.index');
    }

    // View Profile of the dealer/panel
    public function profile(){
       //$user=Auth::user();
        return view('management.dealer.profile');
    }

    // Change Password
    public function modifyPassword(){
        return view('management.dealer.modifypassword');
    }

    // View Statments for dealers
public function statements(){
    return view('management.dealer.statements');
}

// View Person In Charge for panel
public function personInCharge(){
    return view('management.panel.person-in-charge');
}
    




} 
