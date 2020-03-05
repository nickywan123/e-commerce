<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Categories\Category;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function showLoginForm()
    {
        // Check if user is authenticated or not.
        if (Auth::check()) {
            // If authenticated, then get their cart.
            $cart = Auth::user()->cartItems->where('status', 2001);
        } else {
            $cart = null;
        }
        // Get all categories, with subcategories and its images.
        $categories = Category::with('image')->with('subcategories.image')->get();

        return view('auth.login')->with('cart', $cart)->with('categories', $categories);
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
    protected $redirectTo;

    public function redirectTo()
    {

        switch (Auth::user()->role) {
            case 1:
                $this->redirectTo = '/shop';
                return $this->redirectTo;
                break;

            case 2:
                $this->redirectTo = '/dashboard/dealer';
                return $this->redirectTo;
                break;
            case 3:
                $this->redirectTo = '/dashboard/panel';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/shop';
                return $this->redirectTo;
        }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
