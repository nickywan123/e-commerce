<?php

namespace App\Http\Controllers\API\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\API\ResponseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Users\User;
use App\Models\Users\UserAddress;
use App\Models\Users\UserContact;
use App\Models\Users\UserInfo;
use Illuminate\Support\Facades\Hash;
use Validator;

class AuthController extends ResponseController
{
    // Login
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            $error = "Unauthorized";
            return $this->sendError($error, 401);
        }
        $user = $request->user();
        $success['token'] =  $user->createToken('token')->accessToken;
        return $this->sendResponse($success);
    }

    // Logout
    public function logout(Request $request)
    {
        $isUser = $request->user()->token()->revoke();

        if ($isUser) {
            $success['message'] = "Successfully logged out.";
            return $this->sendResponse($success);
        } else {
            $error = "Something went wrong.";
            return $this->sendResponse($error);
        }
    }

    /**
     * @OA\Post(
     *      path="/api/auth/customer/register",
     *      tags={"Auth"},
     *      summary="Customer registration endpoint.",
     *      description="Returns token of registered user",
     *      @OA\RequestBody(
     *          description="Form data for user registration",
     *          @OA\MediaType(
     *              mediaType="form-data",
     *              @OA\Schema(
     *                  required={
     *                      "email",
     *                      "password",
     *                      "fullName",
     *                      "nric",
     *                      "address1",
     *                      "address2",
     *                      "postcode",
     *                      "city",
     *                      "state",
     *                      "contactMobile",
     *                      "existingCustomer"
     *                  },
     *                  @OA\Property(
     *                      property="email",
     *                      type="string",
     *                      maxProperties="255",
     *                      example="johndoe@email.com",
     *                  ),
     *                  @OA\Property(
     *                      property="password",
     *                      type="string",
     *                      minProperties="8",
     *                      example="p@ssw0rd",
     *                  ),
     *                  @OA\Property(
     *                      property="fullName",
     *                      type="string",
     *                      maxProperties="255",
     *                      example="John Doe",
     *                  ),
     *                  @OA\Property(
     *                      property="nric",
     *                      type="string",
     *                      example="95115107832",
     *                      minProperties="12",
     *                      maxProperties="12",
     *                  ),
     *                  @OA\Property(
     *                      property="address1",
     *                      type="string",
     *                      maxProperties="255",
     *                      example="Level 1M Menara Bangkok Bank",
     *                  ),
     *                  @OA\Property(
     *                      property="address2",
     *                      type="string",
     *                      maxProperties="255",
     *                      example="Laman Sentral Berjaya",
     *                  ),
     *                  @OA\Property(
     *                      property="address3",
     *                      type="string",
     *                      example="No 105, Jalan Ampang",
     *                  ),
     *                  @OA\Property(
     *                      property="postcode",
     *                      type="integer",
     *                      example="50450",
     *                  ),
     *                  @OA\Property(
     *                      property="city",
     *                      type="string",
     *                      example="Kuala Lumpur",
     *                  ),
     *                  @OA\Property(
     *                      property="state",
     *                      type="integer",
     *                      example="6 (Selangor)",
     *                  ),
     *                  @OA\Property(
     *                      property="contactMobile",
     *                      type="string",
     *                      example="0194039055",
     *                  ),
     *                  @OA\Property(
     *                      property="contactHome",
     *                      type="string",
     *                      example="0378419400",
     *                  ),
     *                  @OA\Property(
     *                      property="existingCustomer",
     *                      type="integer",
     *                      example="0(False), 1(True)",
     *                  ),
     *              ),
     *          ),
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                      type="object",
     *                  @OA\Property(
     *                      property="token",
     *                      type="string",
     *                      example="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjVlMTdlNjZiYWQwMTcxZTdmZmZhMmI3NjAwN",
     *                  ),
     *              ),
     *          ),
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Bad Request",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  type="object",
     *                  @OA\Property(
     *                      property="error",
     *                      type="object",
     *                      @OA\Property(
     *                          property="email",
     *                          type="array",
     *                          @OA\Items(
     *                              example="The email field is required.",
     *                          ),
     *                      ),
     *                      @OA\Property(
     *                          property="password",
     *                          type="array",
     *                          @OA\Items(
     *                              example="The password field is required.",
     *                          ),
     *                      ),
     *                  ),
     *              ),
     *          ),
     *      ),
     *      @OA\Response(
     *          response=500,
     *          description="Internal Server Error",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  type="object",
     *                  @OA\Property(
     *                      property="error",
     *                      type="string",
     *                      example="Registration is not successfull.",
     *                  ),
     *              ),
     *          ),
     *      ),
     * )
     */
    /**
     * Handles user signup.
     */
    public function customerRegister(Request $request)
    {
        // Validate the request.
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'fullName' => 'required|string|max:255',
            'nric' => 'required|string|min:12|max:12',
            'address1' => 'required|string|max:255',
            'address2' => 'required|string|max:255',
            'postcode' => 'required|integer|min:5|max:5',
            'city' => 'required|string|max:255',
            'state' => 'required|integer',
            'contactMobile' => 'required|string|min:10|max:15',
            'existingCustomer' => 'required|integer',
        ]);

        // If the validation fails..
        if ($validator->fails()) {
            // Return the error(s).
            return $this->sendError($validator->errors(), 401);
        }

        $data = $request->all();

        // Create new User.
        $user = new User;
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        // Create account ID for customer.
        $largestCustomerId = 0;
        if (UserInfo::all()->count() == 0) {
            $largestCustomerId = 1913000001;
        } else {
            $largestCustomerId = UserInfo::largestCustomerId() + 1;
        }

        // Create new User Information.
        $userInfo = new UserInfo;
        $userInfo->user_id = $user->id;
        $userInfo->account_id = $largestCustomerId;
        $userInfo->full_name = $data['fullName'];
        $userInfo->nric = $data['nric'];
        $userInfo->referrer_id = 0;
        $userInfo->save();

        // Create new User Address.
        $userAddress = new UserAddress;
        $userAddress->account_id = $userInfo->account_id;
        $userAddress->address_1 = $data['address1'];
        $userAddress->address_2 = $data['address2'];
        $userAddress->address_3 = $data['address3'];
        $userAddress->postcode = $data['postcode'];
        $userAddress->city = $data['city'];
        $userAddress->state_id = $data['state'];
        $userAddress->is_shipping_address = 1;
        $userAddress->is_residential_address = 0;
        $userAddress->is_mailing_address = 1;
        $userAddress->save();

        if ($data['contactHome'] != null) {
            // User_contacts table (Home).
            $userContactHome = new UserContact;
            $userContactHome->account_id = $userInfo->account_id;
            $userContactHome->contact_num = $data['contactHome'];
            $userContactHome->is_home = 1;
            $userContactHome->save();
        }

        // Create new User Contact (Mobile).
        $userContactMobile = new UserContact;
        $userContactMobile->account_id = $userInfo->account_id;
        $userContactMobile->contact_num = $data['contactMobile'];
        $userContactMobile->is_mobile = 1;
        $userContactMobile->save();

        // Assign roles.
        $user->assignRole('customer');

        // If User, User Address & User Contact created..
        if ($user && $userInfo && $userAddress && $userContactMobile) {
            // Generate token and send successful response.
            $success['token'] =  $user->createToken('token')->accessToken;
            $success['message'] = "Registration successfull";

            return $this->sendResponse($success);
        } else {
            // Return an error.
            $error = "Registration is not successfull.";
            return $this->sendError($error, 500);
        }
    }

    /**
     * @OA\Post(
     *      path="/api/auth/dealer/register",
     *      tags={"Auth"},
     *      summary="Dealer registration endpoint.",
     *      description="Returns token of registered user",
     *      @OA\RequestBody(
     *          description="Form data for user registration",
     *          @OA\MediaType(
     *              mediaType="form-data",
     *              @OA\Schema(
     *                  required={
     *                      "email",
     *                      "password",
     *                      "fullName",
     *                      "nric",
     *                      "birthDate",
     *                      "genderId",
     *                      "raceId",
     *                      "maritalId",
     *                      "address1",
     *                      "address2",
     *                      "postcode",
     *                      "city",
     *                      "state",
     *                      "contactMobile",
     *                      "spouseName",
     *                      "spouseNric",
     *                      "spouseBirtDate",
     *                      "spouseOccupation",
     *                      "spouseContactMobile",
     *                      "spouseEmail",
     *                      "employmentId",
     *                      "companyName",
     *                      "companyAddress1",
     *                      "companyAddress2",
     *                      "companyPostcode",
     *                      "companyCity",  
     *                      "companyState",
     *                      "introducerName",
     *                      "introducerAccountId",
     *                  },
     *                  @OA\Property(
     *                      property="email",
     *                      type="string",
     *                      maxProperties="255",
     *                      example="johndoe@email.com",
     *                  ),
     *                  @OA\Property(
     *                      property="password",
     *                      type="string",
     *                      minProperties="8",
     *                      example="p@ssw0rd",
     *                  ),
     *                  @OA\Property(
     *                      property="fullName",
     *                      type="string",
     *                      maxProperties="255",
     *                      example="John Doe",
     *                  ),
     *                  @OA\Property(
     *                      property="nric",
     *                      type="string",
     *                      example="95115107832",
     *                      minProperties="12",
     *                      maxProperties="12",
     *                  ),
     *                  @OA\Property(
     *                      property="birthDate",
     *                      type="string",
     *                      example="19/11/1995",
     *                  ),
     *                  @OA\Property(
     *                      property="genderID",
     *                      type="integer",
     *                      example="1 (Male)/ 2 (Female)",
     *                  ),
     *                  @OA\Property(
     *                      property="raceID",
     *                      type="integer",
     *                      example="1 (Chinese), 2 (Malay), 3 (Indian)",
     *                  ),
     *                  @OA\Property(
     *                      property="maritalId",
     *                      type="integer",
     *                      example="1 (Single), 2 (Married), 3 (Divorced)",
     *                  ),
     *                  @OA\Property(
     *                      property="address1",
     *                      type="string",
     *                      maxProperties="255",
     *                      example="Level 1M Menara Bangkok Bank",
     *                  ),
     *                  @OA\Property(
     *                      property="address2",
     *                      type="string",
     *                      maxProperties="255",
     *                      example="Laman Sentral Berjaya",
     *                  ),
     *                  @OA\Property(
     *                      property="address3",
     *                      type="string",
     *                      example="No 105, Jalan Ampang",
     *                  ),
     *                  @OA\Property(
     *                      property="postcode",
     *                      type="integer",
     *                      example="50450",
     *                  ),
     *                  @OA\Property(
     *                      property="city",
     *                      type="string",
     *                      example="Kuala Lumpur",
     *                  ),
     *                  @OA\Property(
     *                      property="state",
     *                      type="integer",
     *                      example="6 (Selangor)",
     *                  ),
     *                  @OA\Property(
     *                      property="contactMobile",
     *                      type="string",
     *                      example="0194039055",
     *                  ),
     *                  @OA\Property(
     *                      property="contactHome",
     *                      type="string",
     *                      example="0378419400",
     *                  ),
     *                  @OA\Property(
     *                      property="spouseName",
     *                      type="string",
     *                      example="Joe Lee",
     *                      maxProperties="255",
     *                  ),
     *                  @OA\Property(
     *                      property="spouseNric",
     *                      type="string",
     *                      example="951119105660",
     *                      minProperties="12",
     *                      maxProperties="12",
     *                  ),
     *                  @OA\Property(
     *                      property="spouseBirthdate",
     *                      type="string",
     *                      example="19/12/1990",
     *                  ),
     *                  @OA\Property(
     *                      property="spouseOccupation",
     *                      type="string",
     *                      example="Doctor",
     *                      maxProperties="255",
     *                  ),
     *                  @OA\Property(
     *                      property="spouseContactMobile",
     *                      type="string",
     *                      example="0194039056",
     *                      minProperties="10",
     *                      maxProperties="15",
     *                  ),
     *                  @OA\Property(
     *                      property="spouseContactOffice",
     *                      type="string",
     *                      example="0389111000",
     *                      minProperties="10",
     *                      maxProperties="15",
     *                  ),
     *                  @OA\Property(
     *                      property="spouseEmail",
     *                      type="string",
     *                      maxProperties="255",
     *                      example="joeleetan@gmail.com",
     *                  ),
     *                  @OA\Property(
     *                      property="employmentId",
     *                      type="integer",
     *                      example="1 (Self-employed), 2 (Employed)",
     *                  ),
     *                  @OA\Property(
     *                      property="companyName",
     *                      type="string",
     *                      maxProperties="255",
     *                      example="Delhub Digtial Sdn Bhd",
     *                  ),
     *                  @OA\Property(
     *                      property="companyAddress1",
     *                      type="string",
     *                      example="Level 1M Menara Bangkok Bank",
     *                  ),
     *                  @OA\Property(
     *                      property="companyAddress2",
     *                      type="string",
     *                      example="Laman Sentral Berjaya",
     *                  ),
     *                  @OA\Property(
     *                      property="companyAddress3",
     *                      type="string",
     *                      example="No 105, Jalan Ampang",
     *                  ),
     *                  @OA\Property(
     *                      property="companyPostcode",
     *                      type="integer",
     *                      minProperties="5",
     *                      maxProperties="5",
     *                      example="50450",
     *                  ),
     *                  @OA\Property(
     *                      property="companyCity",
     *                      type="string",
     *                      example="Ampang",
     *                  ),
     *                  @OA\Property(
     *                      property="companyState",
     *                      type="integer",
     *                      example="6 (Selangor)",
     *                  ),
     *                  @OA\Property(
     *                      property="introducerName",
     *                      type="string",
     *                      example="Kamal",
     *                      maxProperties="255",
     *                  ),
     *                  @OA\Property(
     *                      property="introducerAccountId",
     *                      type="integer",
     *                      minProperties="10",
     *                      maxProperties="10",
     *                      example="1910000001",
     *                  ),
     *              ),
     *          ),
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                      type="object",
     *                  @OA\Property(
     *                      property="token",
     *                      type="string",
     *                      example="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjVlMTdlNjZiYWQwMTcxZTdmZmZhMmI3NjAwN",
     *                  ),
     *              ),
     *          ),
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Bad Request",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  type="object",
     *                  @OA\Property(
     *                      property="error",
     *                      type="object",
     *                      @OA\Property(
     *                          property="email",
     *                          type="array",
     *                          @OA\Items(
     *                              example="The email field is required.",
     *                          ),
     *                      ),
     *                      @OA\Property(
     *                          property="password",
     *                          type="array",
     *                          @OA\Items(
     *                              example="The password field is required.",
     *                          ),
     *                      ),
     *                  ),
     *              ),
     *          ),
     *      ),
     *      @OA\Response(
     *          response=500,
     *          description="Internal Server Error",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  type="object",
     *                  @OA\Property(
     *                      property="error",
     *                      type="string",
     *                      example="Registration is not successfull.",
     *                  ),
     *              ),
     *          ),
     *      ),
     * )
     */
    /**
     * Handles dealer signup.
     */
    public function dealerRegister(Request $request)
    {
        // Validate the request.
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'fullName' => 'required|string|max:255',
            'nric' => 'required|string|min:12|max:12',
            'birthDate' => 'required|string',
            'genderId' => 'required|integer',
            'raceId' => 'required|integer',
            'maritalId' => 'required|integer',
            'address1' => 'required|string|max:255',
            'address2' => 'required|string|max:255',
            'postcode' => 'required|integer|min:5|max:5',
            'city' => 'required|string|max:255',
            'state' => 'required|integer',
            'contactMobile' => 'required|string|min:10|max:15',
            'spouseName' => 'required|string|max:255',
            'spouseNric' => 'required|string|min:12|max:12',
            'spouseBirthDate' => 'required|string',
            'spouseOccupation' => 'required|string|max:255',
            'spouseContactMobile' => 'required|string|min:10|max:15',
            'spouseEmail' => 'required|string|email',
            'employmentId' => 'required|integer',
            'companyName' => 'required|string|max:255',
            'companyAddress1' => 'required|string|max:255',
            'companyAddress2' => 'required|string|max:255',
            'companyPostcode' => 'required|integer|min:5|max:5',
            'companyCity' => 'required|string|max:255',
            'companyState' => 'required|integer',
            'introducerName' => 'required|string|max:255',
            'introducerAccountId' => 'required|min:10|max:10',
        ]);

        // If the validation fails..
        if ($validator->fails()) {
            // Return the error(s).
            return $this->sendError($validator->errors(), 401);
        }

        $data = $request->all();

        // Create new User.
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
        $userInfo->full_name = $data['fullName'];
        $userInfo->nric = $data['nric'];
        $userInfo->referrer_id = 0;
        $userInfo->save();

        // Dealer_infos table.
        $dealerInfo = new DealerInfo;
        $dealerInfo->user_id = $user->id;
        $dealerInfo->account_id = $largestDealerId;
        $dealerInfo->full_name = $data['fullName'];
        $dealerInfo->nric = $data['nric'];
        $dealerInfo->date_of_birth = $data['birthDate'];
        $dealerInfo->gender_id = $data['genderId'];
        $dealerInfo->race_id = $data['raceId'];
        $dealerInfo->marital_id = $data['maritalId'];
        $dealerInfo->referrer_id = $data['introducerAccountId'];
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
        $userAddress->address_1 = $data['address1'];
        $userAddress->address_2 = $data['address2'];
        $userAddress->address_3 = $data['address3'];
        $userAddress->postcode = $data['postcode'];
        $userAddress->city = $data['city'];
        $userAddress->state_id = $data['state'];
        $userAddress->is_shipping_address = 1;
        $userAddress->is_residential_address = 1;
        $userAddress->is_mailing_address = 1;
        $userAddress->save();

        // User_contacts table (Home).
        if ($data['contactHome'] != null) {
            $userContactHome = new UserContact;
            $userContactHome->account_id = $userInfo->account_id;
            $userContactHome->contact_num = $data['contactHome'];
            $userContactHome->is_home = 1;
            $userContactHome->save();
        }

        // User_contacts table (Mobile).
        $userContactMobile = new UserContact;
        $userContactMobile->account_id = $userInfo->account_id;
        $userContactMobile->contact_num = $data['contactMobile'];
        $userContactMobile->is_mobile = 1;
        $userContactMobile->save();

        // Dealer_contacts table (Mobile).
        $dealerContactMobile = new DealerContact;
        $dealerContactMobile->account_id = $userInfo->account_id;
        $dealerContactMobile->contact_num = $data['contactMobile'];
        $dealerContactMobile->is_mobile = 1;
        $dealerContactMobile->save();

        // Dealer_contacts table (Home).
        if ($data['contactHome'] != null) {
            $dealerContactHome = new DealerContact;
            $dealerContactHome->account_id = $userInfo->account_id;
            $dealerContactHome->contact_num = $data['contactHome'];
            $dealerContactHome->is_home = 1;
            $dealerContactHome->save();
        }

        $dealerSpouse = new DealerSpouse;
        $dealerSpouse->account_id = $userInfo->account_id;
        $dealerSpouse->spouse_name = $data['spouseName'];
        $dealerSpouse->spouse_nric = $data['spouseNric'];
        $dealerSpouse->spouse_date_of_birth = $data['spouseBirtdate'];
        $dealerSpouse->spouse_occupation = $data['spouseOccupation'];
        $dealerSpouse->spouse_contact_office = $data['spouseContactOffice'];
        $dealerSpouse->spouse_contact_mobile = $data['spousecontactMobile'];
        $dealerSpouse->spouse_email = $data['spouseEmail'];
        $dealerSpouse->save();

        $dealerEmployment = new DealerEmployment;
        $dealerEmployment->account_id = $userInfo->account_id;
        $dealerEmployment->employment_type = $data['employmentId'];
        $dealerEmployment->company_name = $data['companyName'];
        $dealerEmployment->company_address_1 = $data['companyAddress1'];
        $dealerEmployment->company_address_2 = $data['companyAddress2'];
        $dealerEmployment->company_address_3 = $data['companyAddress3'];
        $dealerEmployment->company_postcode = $data['companyPostcode'];
        $dealerEmployment->company_city = $data['companyCity'];
        $dealerEmployment->company_state_id = $data['companyState'];
        $dealerEmployment->save();

        // Assign roles.
        $user->assignRole('customer');
        $user->assignRole('dealer');

        // If User, User Info, User Address & User Contact
        //  with Dealer Info, Dealer Address, Dealer contact, Dealer Spouse and Dealer Employment created..
        if (
            $user &&
            $userInfo &&
            $userAddress &&
            $userContactMobile &&
            $dealerInfo &&
            $dealerAddress &&
            $dealerContactMobile &&
            $dealerSpouse &&
            $dealerEmployment
        ) {
            // Generate token and send successful response.
            $success['token'] =  $user->createToken('token')->accessToken;
            $success['message'] = "Registration successfull";

            return $this->sendResponse($success);
        } else {
            // Return an error.
            $error = "Registration is not successfull.";
            return $this->sendError($error, 500);
        }
    }

    // /**
    //  * Handles user login.
    //  */
    // public function login(Request $request)
    // {
    // }

    // /**
    //  * Handles user logout.
    //  */
    // public function logout(Request $request)
    // {
    // }
}
