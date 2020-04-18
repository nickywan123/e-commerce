<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    // Reset password for logged in users
    public function sendEmailReset(){
       $resetPassword= Password::sendResetLink(['email' => Auth::user()->email], function (Illuminate\Mail\Message $message) {
            $message->subject('Your Password Reset Link');
        });

        return view("shop.customer-dashboard.reset-password")->with('resetPassword',$resetPassword);

    }
}
