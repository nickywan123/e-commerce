<?php

namespace App\Http\Controllers\Shop;

use App\Models\Users\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*** Return Change Password form ***/
    public function index(){
        return view('shop.customer-dashboard.change-password');
    }

    /***Update Change Password**/
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required','min:8','different:current_password'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        dd('Password has been changed!');
        // $request->session()->flash('success', 'Password changed');
        //Auth::logout();
    }
}