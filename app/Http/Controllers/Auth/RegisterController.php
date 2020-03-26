<?php

namespace App\Http\Controllers\Auth;

use App\Models\Users\User;
use App\Http\Controllers\Controller;
use App\Models\Globals\Employment;
use App\Models\Globals\Gender;
use App\Models\Globals\Marital;
use App\Models\Globals\Race;
use App\Models\Globals\State;
use App\Models\Users\UserAddress;
use App\Models\Users\UserContact;
use App\Models\Users\UserInfo;
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
        $genders = Gender::all();
        $races = Race::all();
        $states = State::all();
        $maritals = Marital::all();
        $employments = Employment::all();
        return view('auth.register.customer')
            ->with('genders', $genders)
            ->with('races', $races)
            ->with('states', $states)
            ->with('maritals', $maritals)
            ->with('employments', $employments);
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
            return Validator::make($data, [
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    'unique:users'
                ],
                'password' => [
                    'required',
                    'string',
                    'min:8',
                    'confirmed'
                ],
                'full_name' => [
                    'required',
                    'string'
                ],
                'nric' => [
                    'required',
                    'min:12',
                    'max:12'
                ],
                'address_1' => [
                    'required'
                ],
                'address_2' => [
                    'required'
                ],
                'address_3' => [
                    'required'
                ],
                'postcode' => [
                    'required'
                ],
                'city' => [
                    'required'
                ],
                'state' => [
                    'required'
                ],
                'contact_number_home' => [
                    'required',
                    'min:10',
                ],
                'contact_number_mobile' => [
                    'required',
                    'min:10'
                ],
                'existing_customer' => [
                    'required'
                ],
                'signature' => [
                    'required'
                ]
            ]);
        } elseif ($data['registrationFor'] == 'dealer') {
            // Validation for dealer registration.
            return Validator::make($data, [
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    'unique:users'
                ],
                'password' => [
                    'required',
                    'string',
                    'min:8',
                    'confirmed'
                ],
                'full_name' => [
                    'required',
                    'string'
                ],
                'nric' => [
                    'required',
                    'min:12',
                    'max:12'
                ],
                'date_of_birth' => [
                    'required'
                ],
                'gender_id' => [
                    'required'
                ],
                'race_id' => [
                    'required'
                ],
                'marital_id' => [
                    'required'
                ],
                'address_1' => [
                    'required'
                ],
                'address_2' => [
                    'required'
                ],
                'address_3' => [
                    'required'
                ],
                'postcode' => [
                    'required'
                ],
                'city' => [
                    'required'
                ],
                'state' => [
                    'required'
                ],
                'contact_number_home' => [
                    'required',
                    'min:10'
                ],
                'contact_number_mobile' => [
                    'required',
                    'min:10'
                ],
                'spouse_full_name' => [
                    'required'
                ],
                'spouse_nric' => [
                    'required'
                ],
                'spouse_date_of_birth' => [
                    'required'
                ],
                'spouse_occupation' => [
                    'required'
                ],
                'spouse_contact_office' => [
                    'required',
                    'min:10'
                ],
                'spouse_contact_mobile' => [
                    'required',
                    'min:10'
                ],
                'spouse_email' => [
                    'required',
                    'string',
                    'email'
                ],
                'employment_id' => [
                    'required'
                ],
                'employment_name' => [
                    'required'
                ],
                'company_address_1' => [
                    'required'
                ],
                'company_address_2' => [
                    'required'
                ],
                'company_address_3' => [
                    'required'
                ],
                'company_postcode' => [
                    'required'
                ],
                'company_city' => [
                    'required'
                ],
                'company_state' => [
                    'required'
                ],
                'introducer_name' => [
                    'required'
                ],
                'introducer_account_id' => [
                    'required',
                    'min:10',
                    'max:10'
                ],
                'payment_proof' => [
                    'required',
                    'images',
                    'mimes:jpeg,png,jpg',
                    'max:2048'
                ]
            ]);
        } elseif ($data['registrationFor'] == 'panel') {
            // Validation for panel registration.
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Users\User
     */
    protected function create(array $data)
    {
        // dd($data);

        if ($data['registrationFor'] == 'customer') {
            // Register customer.

            // Users table.
            $user = new User;
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->save();

            // Generating new customer account id.
            $largestCustomerId = 0;
            if (UserInfo::all()->count() == 0) {
                $largestCustomerId = 1913000001;
            } else {
                $largestCustomerId = UserInfo::largestCustomerId() + 1;
            }

            // User_infos table.
            $userInfo = new UserInfo;
            $userInfo->user_id = $user->id;
            $userInfo->account_id = $largestCustomerId;
            $userInfo->full_name = $data['full_name'];
            $userInfo->nric = $data['nric'];
            $userInfo->referrer_id = 0;
            $userInfo->save();

            // User_addresses table.
            $userAddress = new UserAddress;
            $userAddress->account_id = $userInfo->account_id;
            $userAddress->address_1 = $data['address_1'];
            $userAddress->address_2 = $data['address_2'];
            $userAddress->address_3 = $data['address_3'];
            $userAddress->postcode = $data['postcode'];
            $userAddress->city = $data['city'];
            $userAddress->state_id = $data['state'];
            $userAddress->is_shipping_address = 1;
            $userAddress->is_residential_address = 1;
            $userAddress->is_mailing_address = 1;
            $userAddress->save();

            // User_contacts table (Home).
            $userContactHome = new UserContact;
            $userContactHome->account_id = $userInfo->account_id;
            $userContactHome->contact_num = $data['contact_number_home'];
            $userContactHome->is_home = 1;
            $userContactHome->save();

            // User_contacts table (Mobile).
            $userContactMobile = new UserContact;
            $userContactMobile->account_id = $userInfo->account_id;
            $userContactMobile->contact_num = $data['contact_number_mobile'];
            $userContactMobile->is_mobile = 1;
            $userContactMobile->save();

            // $user = User::create([
            //     'email' => $data['email'],
            //     'password' => Hash::make($data['password'])
            // ]);

            // $user->userInfo()->create([
            //     'account_id' => $largestCustomerId,
            //     'full_name' => $data['full_name'],
            //     'nric' => $data['nric'],
            //     'referrer_id' => 0
            // ]);

            // $user->userInfo->addresses()->create([
            //     'address_1' => $data['address_1'],
            //     'address_2' => $data['address_2'],
            //     'address_3' => $data['address_3'],
            //     'postcode' => $data['postcode'],
            //     'city' => $data['city'],
            //     'state_id' => $data['state'],
            //     'is_shipping_address' => 1,
            //     'is_residential_address' => 1,
            //     'is_mailing_address' => 1
            // ]);
        } elseif ($data['registrationFor'] == 'dealer') {
            // Register dealer.
            $user = User::create([
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'account_id' => User::largestDealerId() + 1
            ]);

            $user->userInfo()->create([
                'full_name' => $data['full_name'],
                'nric' => $data['nric'],
                'race' => $data['race_id'],
                'gender' => $data['gender_id'],
                'date_of_birth' => $data['date_of_birth'],
                'marital_status_id' => $data['marital_id']
            ]);

            $user->assignRole('dealer');
        } elseif ($data['registrationFor'] == 'panel') {
            // Register panel.
        }

        return $user;

        // // Validate customer registration form
        // if ($data['RegistrationForm'] == 1) {
        //     $user = User::create([
        //         // Users table

        //         'email' => $data['email'],
        //         'password' => Hash::make($data['password'])
        //     ]);

        //     $user->userInfo()->create([
        //         'name' => $data['name'],
        //         'NRIC' => $data['nric'], // Create NRIC field.
        //         'dealer_id' => $data['dealerID']

        //     ]);

        //     $user->userAddresses()->create([
        //         'address_1' => $data['homeaddress1'],
        //         'address_2' => $data['homeaddress2'],
        //         'address_3' => $data['homeaddress3'],
        //         'zipcode' => $data['postcode'],
        //         'shipping_address' => $data['shippingaddress']
        //     ]);

        //     $user->userContacts()->create([
        //         'mobile_num' => $data['number'],
        //         'emergency_num' => $data['emergency']

        //     ]);


        //     //assign track id code to customer
        //     $user->track_id = 1913000000 + $user->user_id;
        //     $user->save();
        //     $user->assignRole('1');
        // }

        // // Dealer Registration
        // if ($data['RegistrationForm'] == 2) {
        //     $user = User::create([
        //         'account_id' => User::largestDealerId() + 1,
        //         'email' => $data['email'],
        //         'password' => Hash::make($data['password'])
        //     ]);

        //     $user->userInfo()->create([
        //         'full_name' => $data['name'],
        //         'nric' => $data['nric'],
        //         'ethnicity' => $data['ethnicity'],
        //         'gender' => $data['gender'],
        //         'date_of_birth' => $data['date_of_birth'],
        //         'occupation' => $data['occupation']
        //     ]);

        //     $user->userAddresses()->create([
        //         'address_1' => $data['homeaddress1'],
        //         'address_2' => $data['homeaddress2'],
        //         'address_3' => $data['homeaddress3'],
        //         'postcode' => $data['postcode']
        //     ]);

        //     $user->userContacts()->create([

        //         'mobile_num' => $data['number'],
        //         'emergency_num' => $data['emergency']

        //     ]);

        //     //assign track id code to dealer
        //     $user->track_id = 1911000000 + $user->user_id;
        //     $user->save();

        //     $user->assignRole('1');
        //     $user->assignRole('2');
        // }
        return $user;
    }
}
