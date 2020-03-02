<?php

namespace App\Http\Controllers\Auth;

use App\Models\Users\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    // Allow any field to be inserted
    protected $guarded = ['email', 'password'];

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Users\User
     */
    protected function create(array $data) // 
    {
        // $user->create($data);
        $user = User::create([
            // Users table
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        $user->userInfo()->create([
            'name' => $data['name'],
            'NRIC' => $data['nric'], // Create NRIC field.
        ]);

        $user->userAddresses()->create([
            'address_1' => $data['homeaddress1'],
            'address_2' => $data['homeaddress2'],
            'address_3' => $data['homeaddress3'],
            'zipcode' => $data['postcode'],

            'shipping_address' => $data['shippingaddress']
        ]);

        $user->userContacts()->create([

            'mobile_num' => $data['number'],
            'emergency_num' => $data['emergency']

        ]);

        // check if dealer form is registered, assign dealer role or otherwise

        if ($data['isDealerForm'] == 1) {

            $user->assignRole('2');
        } else {
            $user->assignRole('1');
        }
        // $user->assignRole('1');
        return $user;
    }
}
