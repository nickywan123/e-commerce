<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagementController extends Controller
{

    //return home page for panel dashboard
    public function index(){

        return view("management.index.index");
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
