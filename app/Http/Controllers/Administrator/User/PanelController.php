<?php

namespace App\Http\Controllers\Administrator\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Globals\State;
use App\Models\Users\User;
use App\Models\Users\UserInfo;
use App\Models\Users\UserContact;
use App\Models\Users\UserAddress;
use App\Models\Users\Panels\PanelAddress;
use App\Models\Users\Panels\PanelInfo;

use Illuminate\Support\Facades\Hash;

class PanelController extends Controller
{
    public function index()
    {
        $panels = PanelInfo::all();
        return view('management.user.panel.index')
            ->with('panels', $panels);
    }

    public function create()
    {
        $states = State::all();
        return view('management.user.panel.create')
            ->with('states', $states);
    }

    public function store(Request $request)
    {
        // Users table.
        $user = new User;
        $user->email = $request->input('email');
        $user->password = Hash::make('delhubpanel789222');
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
        $userInfo->full_name = $request->input('company_name');
        $userInfo->nric = $request->input('company_ssm');
        $userInfo->referrer_id = 0;
        $userInfo->save();

        // User_addresses table.
        $userAddress = new UserAddress;
        $userAddress->account_id = $userInfo->account_id;
        $userAddress->address_1 = $request->input('correspondence_address_1');
        $userAddress->address_2 = $request->input('correspondence_address_2');
        $userAddress->address_3 = ''; // TODO: Remove address_3 column from user/dealer/panel.
        $userAddress->postcode = $request->input('correspondence_address_postcode');
        $userAddress->city = $request->input('correspondence_address_city');
        $userAddress->state_id = $request->input('correspondence_state_id');
        $userAddress->is_shipping_address = 1;
        $userAddress->is_residential_address = 1;
        $userAddress->is_mailing_address = 1;
        $userAddress->save();

        // User_contacts table (Home).
        $userContactHome = new UserContact;
        $userContactHome->account_id = $userInfo->account_id;
        $userContactHome->contact_num = $request->input('company_phone');
        $userContactHome->is_home = 1;
        $userContactHome->save();

        // User_contacts table (Mobile).
        $userContactMobile = new UserContact;
        $userContactMobile->account_id = $userInfo->account_id;
        $userContactMobile->contact_num = $request->input('company_phone');
        $userContactMobile->is_mobile = 1;
        $userContactMobile->save();

        // Generating new panel account id.
        $largestPanelId = 0;
        if (PanelInfo::all()->count() == 0) {
            $largestPanelId = 1913000001;
        } else {
            $largestPanelId = PanelInfo::largestPanelId() + 1;
        }

        $panelInfo = new PanelInfo;
        $panelInfo->user_id = $user->id;
        $panelInfo->account_id = $largestPanelId;
        $panelInfo->company_name = $request->input('company_name');
        $panelInfo->ssm_number = $request->input('company_ssm');
        $panelInfo->company_email = $request->input('email');
        $panelInfo->company_phone = $request->input('company_phone');
        $panelInfo->pic_name = $request->input('pic_name');
        $panelInfo->pic_nric = $request->input('pic_nric');
        $panelInfo->pic_contact = $request->input('pic_contact');
        $panelInfo->pic_email = $request->input('pic_email');
        $panelInfo->save();

        $panelAddressCorrespondence = new PanelAddress;
        $panelAddressCorrespondence->account_id = $panelInfo->account_id;
        $panelAddressCorrespondence->address_1 = $request->input('correspondence_address_1');
        $panelAddressCorrespondence->address_2 = $request->input('correspondence_address_2');
        $panelAddressCorrespondence->address_3 = '-';
        $panelAddressCorrespondence->postcode = $request->input('correspondence_address_postcode');
        $panelAddressCorrespondence->city = $request->input('correspondence_address_city');
        $panelAddressCorrespondence->state_id = $request->input('correspondence_state_id');
        $panelAddressCorrespondence->is_correspondence_address = 1;
        $panelAddressCorrespondence->save();

        if (
            $request->input('billing_address_1') != null || $request->input('billing_address_1') != '' &&
            $request->input('billing_address_2') != null || $request->input('billing_address_2') != '' &&
            $request->input('billing_address_2') != null || $request->input('billing_address_postcode') != '' &&
            $request->input('billing_address_2') != null || $request->input('billing_address_city') != ''
        ) {
            $panelAddressBilling = new PanelAddress;
            $panelAddressBilling->account_id = $panelInfo->account_id;
            $panelAddressBilling->address_1 = $request->input('billing_address_1');
            $panelAddressBilling->address_2 = $request->input('billing_address_2');
            $panelAddressBilling->address_3 = '-';
            $panelAddressBilling->postcode = $request->input('billing_address_postcode');
            $panelAddressBilling->city = $request->input('billing_address_city');
            $panelAddressBilling->state_id = $request->input('billing_state_id');
            $panelAddressBilling->is_billing_address = 1;
            $panelAddressBilling->save();
        }

        $user->assignRole('customer');
        $user->assignRole('panel');

        return redirect('/management/administrator/user/panel/create')->with('message', 'Panel successfuly created!');
    }
}
