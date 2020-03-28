<?php

use App\Models\Users\User;
use App\Models\Users\UserInfo;
use App\Models\Users\UserAddress;
use App\Models\Users\UserContact;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrator Account
        // Register customer.

        // Users table.
        $user = new User;
        $user->email = 'administrator@email.com';
        $user->password = Hash::make('administrator123');
        $user->email_verified_at = '2020-03-28 12:12:40';
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
        $userInfo->full_name = 'Administrator';
        $userInfo->nric = '951119105605';
        $userInfo->referrer_id = 0;
        // Signature to image.
        $userInfo->signature = '-';
        $userInfo->save();

        // User_addresses table.
        $userAddress = new UserAddress;
        $userAddress->account_id = $userInfo->account_id;
        $userAddress->address_1 = 'Address 1';
        $userAddress->address_2 = 'Address 2';
        $userAddress->address_3 = 'Address 3';
        $userAddress->postcode = '42000';
        $userAddress->city = 'Klang';
        $userAddress->state_id = 1;
        $userAddress->is_shipping_address = 1;
        $userAddress->is_residential_address = 1;
        $userAddress->is_mailing_address = 1;
        $userAddress->save();

        // User_contacts table (Home).
        $userContactHome = new UserContact;
        $userContactHome->account_id = $userInfo->account_id;
        $userContactHome->contact_num = '0166929202';
        $userContactHome->is_home = 1;
        $userContactHome->save();

        // User_contacts table (Mobile).
        $userContactMobile = new UserContact;
        $userContactMobile->account_id = $userInfo->account_id;
        $userContactMobile->contact_num = '0194039056';
        $userContactMobile->is_mobile = 1;
        $userContactMobile->save();

        $user->assignRole('customer');
        $user->assignRole('administrator');
    }
}
