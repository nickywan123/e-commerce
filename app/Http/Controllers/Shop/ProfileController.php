<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    // Return Profile Information
    public function index(){

   return view('shop.profile.index');

    }
}
