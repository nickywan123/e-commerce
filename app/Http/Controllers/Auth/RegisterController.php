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
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

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
    protected $redirectTo = '/login';

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
        //return $this->pageDisabled(); // TODO: Temporary disabled.

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
        //return $this->pageDisabled(); // TODO: Temporary disabled.

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

                'postcode' => [
                    'required'
                ],
                'city' => [
                    'required'
                ],
                'state' => [
                    'required'
                ],
                'contact_number_mobile' => [
                    'required',
                    'min:10'
                ],
                'contact_number_home' => [
                    'min:9'
                ],
                'existing_customer' => [
                    'required'
                ]

            ]);
        } elseif ($data['registrationFor'] == 'dealer') {
            // Validation for dealer registration.
            return Validator::make(
                $data,
                [
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

                    'postcode' => [
                        'required'
                    ],
                    'city' => [
                        'required'
                    ],
                    'state' => [
                        'required'
                    ],
                    'contact_number_mobile' => [
                        'required',
                        'min:10'
                    ],
                    'contact_number_home' => [
                        'min:9'
                    ],
                    'spouse_full_name' => [
                        'required_if:marital_id,2'
                    ],
                    'spouse_nric' => [
                        'required_if:marital_id,2|min:12|max:12',

                    ],
                    'spouse_date_of_birth' => [
                        'required_if:marital_id,2'
                    ],
                    'spouse_occupation' => [
                        'required_if:marital_id,2'
                    ],
                    'spouse_contact_office' => [
                        'required_if:marital_id,2|min:9',

                    ],
                    'spouse_contact_mobile' => [
                        'required_if:marital_id,2|min:10',

                    ],
                    'spouse_email' => [
                        'required_if:marital_id,2'
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
                ],
                [

                    'spouse_full_name.required_if' => 'Please enter the spouse name',
                    'spouse_nric.required_if' => 'Please enter your spouse NRIC',
                    'spouse_date_of_birth.required_if' => 'Please enter your spouse date of birth',
                    'spouse_occupation.required_if' => 'Please enter spouse occupation',
                    'spouse_contact_office.required_if' => 'Please enter spouse contact office',
                    'spouse_contact_mobile.required_if' => 'Please enter spouse mobile number',
                    'spouse_email.required_if' => 'Please enter spouse email'



                ]
            );
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
                $largestCustomerId = 1913000101;
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

            // // Signature to image.
            // $base64_image = $data['signature'];

            // $name = $userInfo->account_id . '-signature.png';
            // $destinationPath = public_path('/storage/uploads/images/users/' . $userInfo->account_id);

            // if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
            //     $image = substr($base64_image, strpos($base64_image, ',') + 1);

            //     $image = base64_decode($image);
            //     if (!File::isDirectory($destinationPath)) {
            //         File::makeDirectory($destinationPath, 0777, true);
            //     }
            //     $imageFile = File::put($destinationPath . '/' . $name, $image);
            // }
            // $userInfo->signature = 'storage/uploads/images/users/' . $userInfo->account_id . '/' .  $name;
            $userInfo->save();

            // User_addresses table(two records - billing address and shipping address)
            $userAddress_billing_address = new UserAddress;
            $userAddress_billing_address->account_id = $userInfo->account_id;
            $userAddress_billing_address->address_1 = $data['address_1'];
            $userAddress_billing_address->address_2 = $data['address_2'];
            $userAddress_billing_address->address_3 = $data['address_3'];
            $userAddress_billing_address->postcode = $data['postcode'];
            $userAddress_billing_address->city = $data['city'];
            $userAddress_billing_address->state_id = $data['state'];
            $userAddress_billing_address->is_shipping_address = 0;
            $userAddress_billing_address->is_residential_address = 0;
            $userAddress_billing_address->is_mailing_address = 1;
            $userAddress_billing_address->save();

            $userAddress_shipping_Address = new UserAddress;
            $userAddress_shipping_Address->account_id = $userInfo->account_id;
            $userAddress_shipping_Address->address_1 = $data['address_1'];
            $userAddress_shipping_Address->address_2 = $data['address_2'];
            $userAddress_shipping_Address->address_3 = $data['address_3'];
            $userAddress_shipping_Address->postcode = $data['postcode'];
            $userAddress_shipping_Address->city = $data['city'];
            $userAddress_shipping_Address->state_id = $data['state'];
            $userAddress_shipping_Address->is_shipping_address = 1;
            $userAddress_shipping_Address->is_residential_address = 0;
            $userAddress_shipping_Address->is_mailing_address = 0;
            $userAddress_shipping_Address->save();

            if ($data['contact_number_home'] != null) {
                // User_contacts table (Home).
                $userContactHome = new UserContact;
                $userContactHome->account_id = $userInfo->account_id;
                $userContactHome->contact_num = $data['contact_number_home'];
                $userContactHome->is_home = 1;
                $userContactHome->save();
            }

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
                $largestCustomerId = 1913000101;
            } else {
                $largestCustomerId = UserInfo::largestCustomerId() + 1;
            }

            // Generating new dealer account id.
            $largestDealerId = 0;
            if (DealerInfo::all()->count() == 0) {
                $largestDealerId = 1911000101;
            } else {
                $largestDealerId = DealerInfo::largestDealerId() + 1;
            }

            // User_infos table.
            $userInfo = new UserInfo;
            $userInfo->user_id = $user->id;
            $userInfo->account_id = $largestCustomerId;
            $userInfo->full_name = $data['full_name'];
            $userInfo->nric = $data['nric'];
            $userInfo->referrer_id = $largestDealerId;
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
            $name = $dealerInfo->account_id . '-payment.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('storage/uploads/images/users/' . $dealerInfo->account_id);
            $image->move($destinationPath, $name);
            $dealerInfo->payment_proof = 'storage/uploads/images/users/' . $dealerInfo->account_id . '/' .  $name;
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
            $dealerAddress->is_shipping_address = 0;
            $dealerAddress->is_residential_address = 0;
            $dealerAddress->is_mailing_address = 1;
            $dealerAddress->save();

            // User_addresses table (create two rows for billing address and shipping address)
            $userAddress_billing_address = new UserAddress;
            $userAddress_billing_address->account_id = $userInfo->account_id;
            $userAddress_billing_address->address_1 = $data['address_1'];
            $userAddress_billing_address->address_2 = $data['address_2'];
            $userAddress_billing_address->address_3 = $data['address_3'];
            $userAddress_billing_address->postcode = $data['postcode'];
            $userAddress_billing_address->city = $data['city'];
            $userAddress_billing_address->state_id = $data['state'];
            $userAddress_billing_address->is_shipping_address = 0;
            $userAddress_billing_address->is_residential_address = 0;
            $userAddress_billing_address->is_mailing_address = 1;
            $userAddress_billing_address->save();

            $userAddress_shipping_address = new UserAddress;
            $userAddress_shipping_address->account_id = $userInfo->account_id;
            $userAddress_shipping_address->address_1 = $data['address_1'];
            $userAddress_shipping_address->address_2 = $data['address_2'];
            $userAddress_shipping_address->address_3 = $data['address_3'];
            $userAddress_shipping_address->postcode = $data['postcode'];
            $userAddress_shipping_address->city = $data['city'];
            $userAddress_shipping_address->state_id = $data['state'];
            $userAddress_shipping_address->is_shipping_address = 1;
            $userAddress_shipping_address->is_residential_address = 0;
            $userAddress_shipping_address->is_mailing_address = 0;
            $userAddress_shipping_address->save();

            // User_contacts table (Home).
            if ($data['contact_number_home'] != null) {
                $userContactHome = new UserContact;
                $userContactHome->account_id = $userInfo->account_id;
                $userContactHome->contact_num = $data['contact_number_home'];
                $userContactHome->is_home = 1;
                $userContactHome->save();
            }

            // User_contacts table (Mobile).
            $userContactMobile = new UserContact;
            $userContactMobile->account_id = $userInfo->account_id;
            $userContactMobile->contact_num = $data['contact_number_mobile'];
            $userContactMobile->is_mobile = 1;
            $userContactMobile->save();

            // Dealer_contacts table (Mobile).
            $dealerContactMobile = new DealerContact;
            $dealerContactMobile->account_id = $largestDealerId;
            $dealerContactMobile->contact_num = $data['contact_number_mobile'];
            $dealerContactMobile->is_mobile = 1;
            $dealerContactMobile->save();

            // Dealer_contacts table (Home).
            if ($data['contact_number_home'] != null) {
                $dealerContactHome = new DealerContact;
                $dealerContactHome->account_id = $largestDealerId;
                $dealerContactHome->contact_num = $data['contact_number_home'];
                $dealerContactHome->is_home = 1;
                $dealerContactHome->save();
            }
            // Dealer_spouse table
            $dealerSpouse = new DealerSpouse;
            $dealerSpouse->account_id = $largestDealerId;
            $dealerSpouse->spouse_name = $data['spouse_full_name'];
            $dealerSpouse->spouse_nric = $data['spouse_nric'];
            $dealerSpouse->spouse_date_of_birth = $data['spouse_date_of_birth'];
            $dealerSpouse->spouse_occupation = $data['spouse_occupation'];
            $dealerSpouse->spouse_contact_office = $data['spouse_contact_office'];
            $dealerSpouse->spouse_contact_mobile = $data['spouse_contact_mobile'];
            $dealerSpouse->spouse_email = $data['spouse_email'];
            $dealerSpouse->save();
            // Dealer_employment
            $dealerEmployment = new DealerEmployment;
            $dealerEmployment->account_id = $largestDealerId;
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
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }
}
