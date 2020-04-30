<?php

use App\Models\Users\User;
use App\Models\Users\UserInfo;
use Illuminate\Database\Seeder;
use App\Models\Users\UserAddress;
use App\Models\Users\UserContact;
use App\Models\Users\Panels\PanelInfo;

use App\Models\Users\Dealers\DealerInfo;
use App\Models\Users\Panels\PanelAddress;
use App\Models\Users\Dealers\DealerSpouse;
use App\Models\Users\Dealers\DealerAddress;
use App\Models\Users\Dealers\DealerContact;
use App\Models\Users\Dealers\DealerEmployment;

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
            $largestCustomerId = 1913000101;
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

        // Test Account Account

        // Users table.
        $user = new User;
        $user->email = 'testaccount@email.com';
        $user->password = Hash::make('test123456');
        $user->email_verified_at = '2020-03-28 12:12:40';
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
        $userInfo->full_name = 'Test Account';
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
            $largestCustomerId = 1913000101;
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
            $largestPanelId = 1918000101;
        } else {
            $largestPanelId = PanelInfo::largestPanelId() + 1;
        }

        // Panel_infos table.
        $panelInfo = new PanelInfo;
        $panelInfo->user_id = $user->id;
        $panelInfo->account_id = $largestPanelId;
        $panelInfo->company_name = 'Bujishu Sdn Bhd';
        $panelInfo->ssm_number = '12345-K';
        $panelInfo->company_email = 'delhubdigital@gmail.com';
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
            $largestCustomerId = 1913000101;
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
            $largestPanelId = 1918000101;
        } else {
            $largestPanelId = PanelInfo::largestPanelId() + 1;
        }

        // Panel_infos table.
        $panelInfo = new PanelInfo;
        $panelInfo->user_id = $user->id;
        $panelInfo->account_id = $largestPanelId;
        $panelInfo->company_name = 'Lafayette Trading Sdn Bhd';
        $panelInfo->ssm_number = '12445-K';
        $panelInfo->company_email = 'delhubdigital@gmail.com';
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
        $user->email = 'delhubdigital@gmail.com';
        $user->password = Hash::make('password');
        $user->email_verified_at = '2020-03-28 12:12:40';
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

        // Panel DC Living Style Account

        // Users table.
        $user = new User;
        $user->email = 'dcliving@email.com';
        $user->password = Hash::make('account123');
        $user->email_verified_at = '2020-03-28 12:12:40';
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
        $userInfo->full_name = 'DC Living Panel';
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
            $largestPanelId = 1918000101;
        } else {
            $largestPanelId = PanelInfo::largestPanelId() + 1;
        }

        // Panel_infos table.
        $panelInfo = new PanelInfo;
        $panelInfo->user_id = $user->id;
        $panelInfo->account_id = $largestPanelId;
        $panelInfo->company_name = 'DC Living Style Sdn Bhd';
        $panelInfo->ssm_number = '12345-K';
        $panelInfo->company_email = 'delhubdigital@g.com';
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

        // SARTO DA SOGNA Style Account

        // Users table.
        $user = new User;
        $user->email = 'sartodasogna@email.com';
        $user->password = Hash::make('account123');
        $user->email_verified_at = '2020-03-28 12:12:40';
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
        $userInfo->full_name = 'SARTO DA SOGNA Panel';
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
            $largestPanelId = 1918000101;
        } else {
            $largestPanelId = PanelInfo::largestPanelId() + 1;
        }

        // Panel_infos table.
        $panelInfo = new PanelInfo;
        $panelInfo->user_id = $user->id;
        $panelInfo->account_id = $largestPanelId;
        $panelInfo->company_name = 'SARTO DA SOGNA Sdn Bhd';
        $panelInfo->ssm_number = '12345-K';
        $panelInfo->company_email = 'delhubdigital@gmail.com';
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

        // PRO PAINT DISTRIBUTION S/B Account

        // Users table.
        $user = new User;
        $user->email = 'propaintpanel@email.com';
        $user->password = Hash::make('account123');
        $user->email_verified_at = '2020-03-28 12:12:40';
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
        $userInfo->full_name = 'SPRO PAINT DISTRIBUTION Panel';
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
        $panelInfo->company_name = 'PRO PAINT DISTRIBUTION S/B';
        $panelInfo->ssm_number = '12345-K';
        $panelInfo->company_email = 'delhubdigital@gmail.com';
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


    // Dealer Account 
        
  $user = new User;
  $user->email = 'dealer@email.com';
  $user->password = Hash::make('dealer123');
  $user->email_verified_at = '2020-03-28 12:12:40';
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
  $userInfo->full_name = 'Dealer';
  $userInfo->nric ='951119105605';
  $userInfo->referrer_id = 0;
  $userInfo->signature = '-';
  $userInfo->save();

  // Dealer_infos table.
  $dealerInfo = new DealerInfo;
  $dealerInfo->user_id = $user->id;
  $dealerInfo->account_id = $largestDealerId;
  $dealerInfo->full_name = 'Dealer';
  $dealerInfo->nric = '940312345604';
  $dealerInfo->date_of_birth = '31-03-1990';
  $dealerInfo->gender_id = 1;
  $dealerInfo->race_id = 1;
  $dealerInfo->marital_id = 1;
  $dealerInfo->referrer_id = 0;

  // Payment proof
  $image = 'abc.jpg';
  $name = $dealerInfo->account_id . '-payment.';
//   $destinationPath = public_path('storage/uploads/images/users/' . $dealerInfo->account_id);
//   $image->move($destinationPath, $name);
  $dealerInfo->payment_proof = 'storage/uploads/images/users/' . $dealerInfo->account_id . '/' .  $name;
  $dealerInfo->save();

  
  // Dealer_address table..
  $dealerAddress = new DealerAddress;
  $dealerAddress->account_id = $userInfo->account_id;
  $dealerAddress->address_1 = 'dealer_address_1';
  $dealerAddress->address_2 = 'dealer_address_2';
  $dealerAddress->address_3 = 'dealer_address_3';
  $dealerAddress->postcode = 58200;
  $dealerAddress->city = 'Kuala Lumpur';
  $dealerAddress->state_id = 1;
  $dealerAddress->is_shipping_address = 1;
  $dealerAddress->is_residential_address = 1;
  $dealerAddress->is_mailing_address = 1;
  $dealerAddress->save();

  // User_addresses table.
  $userAddress = new UserAddress;
  $userAddress->account_id = $userInfo->account_id;
  $userAddress->address_1 = 'dealer_address_4';
  $userAddress->address_2 = 'dealer_address_5';
  $userAddress->address_3 = 'dealer_address_6';
  $userAddress->postcode = 53233;
  $userAddress->city = 'Selangor';
  $userAddress->state_id = 1;
  $userAddress->is_shipping_address = 1;
  $userAddress->is_residential_address = 1;
  $userAddress->is_mailing_address = 1;
  $userAddress->save();

  // User_contacts table (Home).

      $userContactHome = new UserContact;
      $userContactHome->account_id = $userInfo->account_id;
      $userContactHome->contact_num =2123233212121;
      $userContactHome->is_home = 1;
      $userContactHome->save();
  

  // User_contacts table (Mobile).
  $userContactMobile = new UserContact;
  $userContactMobile->account_id = $userInfo->account_id;
  $userContactMobile->contact_num = 4354343443121;
  $userContactMobile->is_mobile = 1;
  $userContactMobile->save();

  // Dealer_contacts table (Mobile).
  $dealerContactMobile = new DealerContact;
  $dealerContactMobile->account_id = $userInfo->account_id;
  $dealerContactMobile->contact_num = 2135255655544;
  $dealerContactMobile->is_mobile = 1;
  $dealerContactMobile->save();

  // Dealer_contacts table (Home).
      $dealerContactHome = new DealerContact;
      $dealerContactHome->account_id = $userInfo->account_id;
      $dealerContactHome->contact_num = 43544545423232323;
      $dealerContactHome->is_home = 1;
      $dealerContactHome->save();
  

  $dealerSpouse = new DealerSpouse;
  $dealerSpouse->account_id = $userInfo->account_id;
  $dealerSpouse->spouse_name = 'xxxxxxxxxx';
  $dealerSpouse->spouse_nric ='xxxxxxxxxx';
  $dealerSpouse->spouse_date_of_birth = 'xxxxxxxxxx';
  $dealerSpouse->spouse_occupation = 'xxxxxxxxxx';
  $dealerSpouse->spouse_contact_office = 'xxxxxxxxxx';
  $dealerSpouse->spouse_contact_mobile = 'xxxxxxxxxx';
  $dealerSpouse->spouse_email = 'xxxxxx@email.com';
  $dealerSpouse->save();

  $dealerEmployment = new DealerEmployment;
  $dealerEmployment->account_id = $userInfo->account_id;
  $dealerEmployment->employment_type = 2;
  $dealerEmployment->company_name = 'xxxxxxxxxx';
  $dealerEmployment->company_address_1 = 'xxxxxxxxxx';
  $dealerEmployment->company_address_2 = 'xxxxxxxxxx';
  $dealerEmployment->company_address_3 = 'xxxxxxxxxx';
  $dealerEmployment->company_postcode = 'xxxxxxxxxx';
  $dealerEmployment->company_city = 'xxxxxxxxxx';
  $dealerEmployment->company_state_id = 'xxxxxxxxxx';
  $dealerEmployment->save();

  $user->assignRole('customer');
  $user->assignRole('dealer');




        // KK Lee Account
        // Users table.
        $user = new User;
        $user->email = 'kklee.dc@gmail.com';
        $user->password = Hash::make('kklee.dc123');
        $user->email_verified_at = '2020-03-28 12:12:40';
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
        $userInfo->account_id = 1913000008;
        $userInfo->full_name = 'KK Lee';
        $userInfo->nric = '951119105605';
        $userInfo->referrer_id = 0;
        // Signature to image.
        $userInfo->signature = '-';
        $userInfo->save();

        // User_addresses table.
        $userAddress = new UserAddress;
        $userAddress->account_id = $userInfo->account_id;
        $userAddress->address_1 = '1.26.5,';
        $userAddress->address_2 = 'Menara Bangkok Bank';
        $userAddress->address_3 = '-';
        $userAddress->postcode = '50450 ';
        $userAddress->city = 'Kuala Lumpur';
        $userAddress->state_id = 14;
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
    }
}
