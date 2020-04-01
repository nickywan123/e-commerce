<?php

use App\Models\Users\User;
use App\Models\Users\UserInfo;
use App\Models\Users\UserAddress;
use App\Models\Users\UserContact;
use App\Models\Users\Panels\PanelAddress;
use App\Models\Users\Panels\PanelInfo;

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

        // Panel Bujishu Account

        // Users table.
        $user = new User;
        $user->email = 'bujishupanel@email.com';
        $user->password = Hash::make('account123');
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
        $userInfo->full_name = 'Bujishu Panel';
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

        // Generating new panel account id.
        $largestPanelId = 0;
        if (PanelInfo::all()->count() == 0) {
            $largestPanelId = 1918000001;
        } else {
            $largestPanelId = PanelInfo::largestPanelId() + 1;
        }

        // Panel_infos table.
        $panelInfo = new PanelInfo;
        $panelInfo->user_id = $user->id;
        $panelInfo->account_id = $largestPanelId;
        $panelInfo->company_name = 'Bujishu Sdn Bhd';
        $panelInfo->ssm_number = '12345-K';
        $panelInfo->company_email = 'bujishupanel@email.com';
        $panelInfo->company_phone = '0194039056';
        $panelInfo->pic_name = 'Wan Shahruddin';
        $panelInfo->pic_nric = '951119105605';
        $panelInfo->pic_contact = '0166929202';
        $panelInfo->pic_email = 'wan@email.com';
        $panelInfo->save();

        $panelAddressCorrespondence = new PanelAddress;
        $panelAddressCorrespondence->account_id = $panelInfo->account_id;
        $panelAddressCorrespondence->address_1 = 'Correspondence Address 1';
        $panelAddressCorrespondence->address_2 = 'Correspondence Address 2';
        $panelAddressCorrespondence->address_3 = '-';
        $panelAddressCorrespondence->postcode = '42000';
        $panelAddressCorrespondence->city = 'Correspondence Address City';
        $panelAddressCorrespondence->state_id = 1;
        $panelAddressCorrespondence->is_correspondence_address = 1;
        $panelAddressCorrespondence->save();

        $panelAddressBilling = new PanelAddress;
        $panelAddressBilling->account_id = $panelInfo->account_id;
        $panelAddressBilling->address_1 = 'Correspondence Address 1';
        $panelAddressBilling->address_2 = 'Correspondence Address 2';
        $panelAddressBilling->address_3 = '-';
        $panelAddressBilling->postcode = '42000';
        $panelAddressBilling->city = 'Correspondence Address City';
        $panelAddressBilling->state_id = 1;
        $panelAddressBilling->is_billing_address = 1;
        $panelAddressBilling->save();

        $user->assignRole('customer');
        $user->assignRole('panel');

        // Panel Lafayette Trading

        // Users table.
        $user = new User;
        $user->email = 'lafayettepanel@email.com';
        $user->password = Hash::make('account123');
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
        $userInfo->full_name = 'Lafayette Panel';
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

        // Generating new panel account id.
        $largestPanelId = 0;
        if (PanelInfo::all()->count() == 0) {
            $largestPanelId = 1918000001;
        } else {
            $largestPanelId = PanelInfo::largestPanelId() + 1;
        }

        // Panel_infos table.
        $panelInfo = new PanelInfo;
        $panelInfo->user_id = $user->id;
        $panelInfo->account_id = $largestPanelId;
        $panelInfo->company_name = 'Lafayette Trading Sdn Bhd';
        $panelInfo->ssm_number = '12445-K';
        $panelInfo->company_email = 'lafayettepanel@email.com';
        $panelInfo->company_phone = '0194039056';
        $panelInfo->pic_name = 'Wan Shahruddin';
        $panelInfo->pic_nric = '951119105605';
        $panelInfo->pic_contact = '0166929202';
        $panelInfo->pic_email = 'wan@email.com';
        $panelInfo->save();

        $panelAddressCorrespondence = new PanelAddress;
        $panelAddressCorrespondence->account_id = $panelInfo->account_id;
        $panelAddressCorrespondence->address_1 = 'Correspondence Address 1';
        $panelAddressCorrespondence->address_2 = 'Correspondence Address 2';
        $panelAddressCorrespondence->address_3 = '-';
        $panelAddressCorrespondence->postcode = '42000';
        $panelAddressCorrespondence->city = 'Correspondence Address City';
        $panelAddressCorrespondence->state_id = 1;
        $panelAddressCorrespondence->is_correspondence_address = 1;
        $panelAddressCorrespondence->save();

        $panelAddressBilling = new PanelAddress;
        $panelAddressBilling->account_id = $panelInfo->account_id;
        $panelAddressBilling->address_1 = 'Correspondence Address 1';
        $panelAddressBilling->address_2 = 'Correspondence Address 2';
        $panelAddressBilling->address_3 = '-';
        $panelAddressBilling->postcode = '42000';
        $panelAddressBilling->city = 'Correspondence Address City';
        $panelAddressBilling->state_id = 1;
        $panelAddressBilling->is_billing_address = 1;
        $panelAddressBilling->save();

        $user->assignRole('customer');
        $user->assignRole('panel');

        // Customer 1

        // Users table.
        $user = new User;
        $user->email = 'customer1@email.com';
        $user->password = Hash::make('password');
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
        $userInfo->full_name = 'Customer 1';
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
    }
}
