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
    /**
     * @OA\Post(
     *      path="/api/auth/register",
     *      tags={"Auth"},
     *      summary="Register user",
     *      description="Returns token of registered user",
     *      @OA\RequestBody(
     *          description="Form data for user registration",
     *          @OA\MediaType(
     *              mediaType="formData",
     *              @OA\Schema(
     *                  required={
     *                      "email",
     *                      "password",
     *                      "fullName",
     *                      "nric",
     *                      "address1",
     *                  },
     *                  @OA\Property(
     *                      property="email",
     *                      type="string",
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
     *                      example="Level 1M Menara Bangkok Bank",
     *                  ),
     *                  @OA\Property(
     *                      property="address2",
     *                      type="string",
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
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'fullName' => 'required|string',
            'nric' => 'required|min:12|max:12',
            'address1' => 'required',
            'address2' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'state' => 'required',
            'contactMobile' => 'required|min:10',
            'existingCustomer' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors(), 401);
        }

        $data = $request->all();

        $user = new User;
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        $largestCustomerId = 0;
        if (UserInfo::all()->count() == 0) {
            $largestCustomerId = 1913000001;
        } else {
            $largestCustomerId = UserInfo::largestCustomerId() + 1;
        }

        // User information
        $userInfo = new UserInfo;
        $userInfo->user_id = $user->id;
        $userInfo->account_id = $largestCustomerId;
        $userInfo->full_name = $data['full_name'];
        $userInfo->nric = $data['nric'];
        $userInfo->referrer_id = 0;
        $userInfo->save();

        // User address
        $userAddress = new UserAddress;
        $userAddress->account_id = $userInfo->account_id;
        $userAddress->address_1 = $data['address_1'];
        $userAddress->address_2 = $data['address_2'];
        $userAddress->address_3 = $data['address_3'];
        $userAddress->postcode = $data['postcode'];
        $userAddress->city = $data['city'];
        $userAddress->state_id = $data['state'];
        $userAddress->is_shipping_address = 1;
        $userAddress->is_residential_address = 0;
        $userAddress->is_mailing_address = 1;
        $userAddress->save();

        $userContactMobile = new UserContact;
        $userContactMobile->account_id = $userInfo->account_id;
        $userContactMobile->contact_num = $data['contactMobile'];
        $userContactMobile->is_mobile = 1;
        $userContactMobile->save();

        if ($user && $userAddress && $userContactMobile) {
            $success['token'] =  $user->createToken('token')->accessToken;
            $success['message'] = "Registration successfull";

            return $this->sendResponse($success);
        } else {
            $error = "Registration is not successfull.";
            return $this->sendError($error, 500);
        }
    }

    //login
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

    //logout
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

    //getuser
    public function getUser(Request $request)
    {
        //$id = $request->user()->id;
        $user = $request->user();
        if ($user) {
            return $this->sendResponse($user);
        } else {
            $error = "user not found";
            return $this->sendResponse($error);
        }
    }

    /**
     * Handles user signup.
     */
    public function customerRegister(Request $request)
    {
        // Request validation
        $validator = Validator::make($request->all(), [
            'name' => 'required | string',
            'nric' => 'required | min:12 | max:12',
            'mobileNumber' => 'required | min:10 | max:15', // TODO: Check highest amount of number of mobile phone.
            'emergencyNumber' => 'required | min:10 | max:15',
            'address_1' => 'required | string',
            'address_2' => 'required | string',
            'address_3' => 'required | string',
            'postcode' => 'required | min: 5 | max: 5',
            'shipping_address' => 'required | string',
            'email' => 'required | string | email | unique:users',
            'password' => 'required'
        ]);

        // If validation fails..
        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $input = $request->all();

        // Create new user
        $user = new User;
        $user->email = $input['email'];
        $user->password = bcrypt($input['password']);
        $user->save();

        if ($user->save()) {
            $user->track_id = 1913000000 + $user->user_id;
            $user->save();

            $userInfo = new UserInfo;
            $userInfo->user_id = $user->user_id;
            $userInfo->name = $input['name'];
            $userInfo->nric = $input['nric'];
            $userInfo->dealer_id = $input['dealer_id'];
            $userInfo->save();

            $userAddress = new UserAddress;
            $userAddress->user_id = $user->user_id;
            $userAddress->address_1 = $input['address_1'];
            $userAddress->address_2 = $input['address_2'];
            $userAddress->address_3 = $input['address_3'];
            $userAddress->zipcode = $input['postcode'];
            $userAddress->shipping_address = $input['shipping_address'];
            $userAddress->save();

            $userContact = new UserContact;
            $userContact->user_id = $user->user_id;
            $userContact->mobile_num = $input['mobileNumber'];
            $userContact->emergency_num = $input['emergencyNumber'];
            $userContact->save();

            $user->assignRole('1');

            $success['result'] =  $user->createToken('token')->accessToken;
            $success['success'] = 'true';
            $success['message'] = "Registration successfull!";
            return $this->sendResponse($success);
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
