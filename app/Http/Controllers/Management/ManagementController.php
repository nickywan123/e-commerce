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
}
