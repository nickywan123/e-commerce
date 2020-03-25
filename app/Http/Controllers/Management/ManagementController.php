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

    // return orders(all) for panel
    public function allOrders(){
     return view('management.orders.allCustOrders');
    }

 // Home Page for Dealer
    public function index_dealer(){
        return view('management.dealer.index');
    }

    // View Profile 
    public function profile(){
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

}
