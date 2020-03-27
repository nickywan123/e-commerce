<?php

namespace App\Http\Controllers\Auth;

use App\Models\Users\User;
use App\Http\Controllers\Controller;
use App\Models\Users\Dealers\DealerSpouse;
use App\Models\Users\Dealers\DealerEmployment;
use App\Models\Users\Dealers\DealerContact;
use App\Models\Users\Dealers\DealerAddress;
use App\Models\Globals\Employment;
use App\Models\Globals\Gender;
use App\Models\Globals\Marital;
use App\Models\Globals\Race;
use App\Models\Globals\State;
use App\Models\Users\Dealers\DealerInfo;
use App\Models\Users\Panels\PanelInfo;
use App\Models\Users\UserAddress;
use App\Models\Users\UserContact;
use App\Models\Users\UserInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use File;
use Storage;

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
                    'image',
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
            // Signature to image.
            $base64_image = $data['signature'];

            $name = $userInfo->account_id . '-signature.png';
            $destinationPath = public_path('/storage/uploads/images/users/' . $userInfo->account_id);

            if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
                $image = substr($base64_image, strpos($base64_image, ',') + 1);

                $image = base64_decode($image);
                if(!File::isDirectory($destinationPath)){
                    File::makeDirectory($destinationPath);
                }
                $imageFile = File::put($destinationPath . '/' . $name, $image);
            }
            $userInfo->signature = 'storage/uploads/images/users/'. $userInfo->account_id . '/' .  $name;
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

            $user->assignRole('customer');
        } elseif ($data['registrationFor'] == 'dealer') {
            // Register dealer.

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

            // Generating new dealer account id.
            $largestDealerId = 0;
            if (DealerInfo::all()->count() == 0) {
                $largestDealerId = 1911000001;
            } else {
                $largestDealerId = DealerInfo::largestDealerId() + 1;
            }

            // User_infos table.
            $userInfo = new UserInfo;
            $userInfo->user_id = $user->id;
            $userInfo->account_id = $largestCustomerId;
            $userInfo->full_name = $data['full_name'];
            $userInfo->nric = $data['nric'];
            $userInfo->referrer_id = 0;
            $userInfo->save();

            // Dealer_infos table.
            $dealerInfo = new DealerInfo;
            $dealerInfo->user_id = $user->id;
            $dealerInfo->account_id = $largestDealerId;
            $dealerInfo->full_name = $data['full_name'];
            $dealerInfo->nric = $data['nric'];
            $dealerInfo->date_of_birth = $data['date_of_birth'];
            $dealerInfo->gender_id = $data['gender_id'];
            $dealerInfo->race_id = $data['race_id'];
            $dealerInfo->marital_id = $data['marital_id'];
            $dealerInfo->referrer_id = $data['introducer_account_id'];
            // Payment proof
            $image = $data['payment_proof'];
            $name = $dealerInfo->account_id.'-payment.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('storage/uploads/images/users/'. $dealerInfo->account_id);
            $image->move($destinationPath, $name);
            $dealerInfo->payment_proof = 'storage/uploads/images/users/'. $dealerInfo->account_id . '/' .  $name;
            $dealerInfo->save();

            // Dealer_address table..
            $dealerAddress = new DealerAddress;
            $dealerAddress->account_id = $userInfo->account_id;
            $dealerAddress->address_1 = $data['address_1'];
            $dealerAddress->address_2 = $data['address_2'];
            $dealerAddress->address_3 = $data['address_3'];
            $dealerAddress->postcode = $data['postcode'];
            $dealerAddress->city = $data['city'];
            $dealerAddress->state_id = $data['state'];
            $dealerAddress->is_shipping_address = 1;
            $dealerAddress->is_residential_address = 1;
            $dealerAddress->is_mailing_address = 1;
            $dealerAddress->save();

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

            // Dealer_contacts table (Mobile).
            $dealerContactMobile = new DealerContact;
            $dealerContactMobile->account_id = $userInfo->account_id;
            $dealerContactMobile->contact_num = $data['contact_number_mobile'];
            $dealerContactMobile->is_mobile = 1;
            $dealerContactMobile->save();

            // Dealer_contacts table (Home).
            $dealerContactHome = new DealerContact;
            $dealerContactHome->account_id = $userInfo->account_id;
            $dealerContactHome->contact_num = $data['contact_number_home'];
            $dealerContactHome->is_home = 1;
            $dealerContactHome->save();

            $dealerSpouse = new DealerSpouse;
            $dealerSpouse->account_id = $userInfo->account_id;
            $dealerSpouse->spouse_name = $data['spouse_full_name'];
            $dealerSpouse->spouse_nric = $data['spouse_nric'];
            $dealerSpouse->spouse_date_of_birth = $data['spouse_date_of_birth'];
            $dealerSpouse->spouse_occupation = $data['spouse_occupation'];
            $dealerSpouse->spouse_contact_office = $data['spouse_contact_office'];
            $dealerSpouse->spouse_contact_mobile = $data['spouse_contact_mobile'];
            $dealerSpouse->spouse_email = $data['spouse_email'];
            $dealerSpouse->save();

            $dealerEmployment = new DealerEmployment;
            $dealerEmployment->account_id = $userInfo->account_id;
            $dealerEmployment->employment_type = $data['employment_id'];
            $dealerEmployment->company_name = $data['employment_name'];
            $dealerEmployment->company_address_1 = $data['company_address_1'];
            $dealerEmployment->company_address_2 = $data['company_address_2'];
            $dealerEmployment->company_address_3 = $data['company_address_3'];
            $dealerEmployment->company_postcode = $data['company_postcode'];
            $dealerEmployment->company_city = $data['company_city'];
            $dealerEmployment->company_state_id = $data['company_state'];
            $dealerEmployment->save();

            $user->assignRole('customer');
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
