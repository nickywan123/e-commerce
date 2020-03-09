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
use Validator;

class AuthController extends ResponseController
{
    //create user
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|',
            'email' => 'required|string|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        if ($user) {
            $success['token'] =  $user->createToken('token')->accessToken;
            $success['message'] = "Registration successfull..";
            return $this->sendResponse($success);
        } else {
            $error = "Sorry! Registration is not successfull.";
            return $this->sendError($error, 401);
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
