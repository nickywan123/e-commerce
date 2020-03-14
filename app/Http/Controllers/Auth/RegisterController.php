<?php

namespace App\Http\Controllers\Auth;

use App\Models\Users\User;
use App\Http\Controllers\Controller;
use App\Models\Globals\Employment;
use App\Models\Globals\Gender;
use App\Models\Globals\Marital;
use App\Models\Globals\Race;
use App\Models\Globals\State;
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
    protected $redirectTo = '/shop';

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
     * Return customer registration form.
     */
    public function showRegistrationForm()
    {
        // TODO: Change to auth/register/customer.
        // return view('auth.register.customer');
        return view('auth.register');
    }

    /**
     * Return dealer registration form.
     */
    public function showDealerRegistrationForm()
    {
        $genders = Gender::all();
        $races = Race::all();
        $states = State::all();
        $maritals = Marital::all();
        $employments = Employment::all();
        return view('auth.register.dealer')
            ->with('genders', $genders)
            ->with('races', $races)
            ->with('states', $states)
            ->with('maritals', $maritals)
            ->with('employments', $employments);
    }

    /**
     * Return panel registration form.
     */
    public function showPanelRegistrationForm()
    {
        return view('auth.register.panel');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if ($data['registrationFor'] == 'customer') {
            // Validation for customer registration.
        } elseif ($data['registrationFor'] == 'dealer') {
            // Validation for dealer registration.
        } elseif ($data['registrationFor'] == 'panel') {
            // Validation for panel registration.
        }
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => 'required|captcha',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Users\User
     */
    protected function create(array $data) // Request $request
    {
        if ($data['registrationFor'] == 'customer') {
            // Register customer.
        } elseif ($data['registrationFor'] == 'dealer') {
            // Register dealer.
        } elseif ($data['registrationFor'] == 'panel') {
            // Register panel.
        }

        // Validate customer registration form
        if ($data['RegistrationForm'] == 1) {
            $user = User::create([
                // Users table

                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ]);

            $user->userInfo()->create([
                'name' => $data['name'],
                'NRIC' => $data['nric'], // Create NRIC field.
                'dealer_id' => $data['dealerID']

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


            //assign track id code to customer
            $user->track_id = 1913000000 + $user->user_id;
            $user->save();
            $user->assignRole('1');
        }

        // Dealer Registration
        if ($data['RegistrationForm'] == 2) {
            $user = User::create([
                'account_id' => User::largestDealerId() + 1,
                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ]);

            $user->userInfo()->create([
                'full_name' => $data['name'],
                'nric' => $data['nric'],
                'ethnicity' => $data['ethnicity'],
                'gender' => $data['gender'],
                'date_of_birth' => $data['date_of_birth'],
                'occupation' => $data['occupation']
            ]);

            $user->userAddresses()->create([
                'address_1' => $data['homeaddress1'],
                'address_2' => $data['homeaddress2'],
                'address_3' => $data['homeaddress3'],
                'postcode' => $data['postcode']
            ]);

            $user->userContacts()->create([

                'mobile_num' => $data['number'],
                'emergency_num' => $data['emergency']

            ]);

            //assign track id code to dealer
            $user->track_id = 1911000000 + $user->user_id;
            $user->save();

            $user->assignRole('1');
            $user->assignRole('2');
        }
        return $user;
    }
}
