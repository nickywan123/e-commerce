<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users\User;

class CustomerInfo extends Controller
{


    public function viewUser()
    {
        $user = User::first();

        return view('/home')->with('user', $user);
    }
}
