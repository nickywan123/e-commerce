<?php

namespace App\Http\Controllers\Management;

use PDF;
use Auth;
use Carbon\Carbon;
use App\Models\Users\User;
use Illuminate\Http\Request;
use App\Models\Purchases\Order;
use App\Models\Purchases\Purchase;
use App\Http\Controllers\Controller;
use App\Models\Users\Panels\PanelInfo;
use App\Models\Users\Dealers\DealerInfo;
use App\Models\Users\Dealers\Statement;
use App\Users\Dealers\Statement as DealersStatement;

class ManagementController extends Controller
{

    // Return Shop -> Panel -> All Orders-> index
    public function index()
    {

        // $status = [1001, 1002, 1003];
        // // Get panel

        // $panel_id = User::find(Auth::user()->id);
        // //wrong filter
        // $panel_id = $panel_id->panelInfo->account_id;
        // $customerOrders = new Order;
        // $customerOrders = $customerOrders->where('panel_id', $panel_id)->whereIn('order_status', $status)->get();



        // return view("management.panel.index")->with('customerOrders', $customerOrders);
        // $now = Carbon::now();
        // $format = 'dd/mm/YYYY';
        // $date = Carbon::createFromFormat($format, $now);
        return view('management.panel.home');
    }

    // Return Value Tracking -> Show Customer Orders
    public function valueTracking()
    {
        $status = [1001, 1002, 1003];
        // Get panel

        $panel_id = User::find(Auth::user()->id);

        $panel_id = $panel_id->panelInfo->account_id;
        $customerOrders = new Order;
        $customerOrders = $customerOrders->where('panel_id', $panel_id)->whereIn('order_status', $status)->get();



        return view("management.panel.index")->with('customerOrders', $customerOrders);
    }

    /***Return purchase order(pdf) for the order  **/

    public function viewPurchaseOrder($orderNum)
    {

        $order = new Order();
        $order = $order->where('order_number', $orderNum)->first();

        $pdf = PDF::loadView('documents.order.purchase-order', compact('order'))->setPaper('A4');
        return $pdf->stream('purchase-order.' . $orderNum . '.pdf');
    }

    // Update estimate delivery date (orders)
    public function updateOrder(Request $request, $order_num)
    {
        $order = new Order();
        $order = Order::findOrFail($order_num);
        $order->delivery_date = $request->input('delivery_date');
        $order->order_status = 1002;
        // $order->updated_at=
        $order->save();
        if ($order) {
            return back()->with(['successful_message' => 'Order updated successfully']);
        } else {
            return back()->with(['error_message' => 'Failed to update order']);
        }
    }

    /****Return company profile for panel***/

    public function companyProfile()
    {
        $panel_id = User::find(Auth::user()->id);
        $panel_id = $panel_id->panelInfo->account_id;
        $companyProfile = new PanelInfo();
        $companyProfile = $companyProfile->where('account_id', $panel_id)->first();
        return view("management.panel.company-profile")->with('companyProfile', $companyProfile);
    }


    /**Return edit page for company profile */

    public function editProfile()
    {
        $panel_id = User::find(Auth::user()->id);
        $panel_id = $panel_id->panelInfo->account_id;
        $companyProfile = new PanelInfo();
        $companyProfile = $companyProfile->where('account_id', $panel_id)->first();
        return view("management.panel.company-profile-edit")->with('companyProfile', $companyProfile);
    }



    /** Update company profile**/

    public function updateProfile(Request $request, $id)
    {

        $this->validate($request, array(

            'company_billing_address_1' => 'required',
            'company_billing_address_2' => 'required',
            'company_billing_address_3' => 'required',
            'company_billing_postcode' => 'required|digits:5',
            'company_billing_city' => 'required',
            'company_address_1' => 'required',
            'company_address_2' => 'required',
            'company_address_3' => 'required',
            'postcode' => 'required|digits:5',
            'city' => 'required',
            'company_phone_number' => 'required|digits:10'
        ));


        $companyProfile = new PanelInfo();
        $companyProfile = $companyProfile->where('account_id', $id)->first();

        $correspondence_address = $companyProfile->correspondenceAddress;
        $correspondence_address->address_1 = $request->input('company_address_1');
        $correspondence_address->address_2 = $request->input('company_address_2');
        $correspondence_address->address_3 = $request->input('company_address_3');
        $correspondence_address->postcode = $request->input('postcode');
        $correspondence_address->city = $request->input('city');
        $correspondence_address->save();




        $billing_address = $companyProfile->billingAddress;
        $billing_address->address_1 = $request->input('company_billing_address_1');
        $billing_address->address_2 = $request->input('company_billing_address_2');
        $billing_address->address_3 = $request->input('company_billing_address_3');
        $billing_address->postcode = $request->input('company_billing_postcode');
        $billing_address->city = $request->input('company_billing_city');
        $billing_address->save();



        $companyProfile->company_phone = $request->input('company_phone_number');
        $companyProfile->save();









        if ($companyProfile && $correspondence_address && $billing_address) {
            return view("management.panel.company-profile")->with('companyProfile', $companyProfile)->with(['successful_message' => 'Profile updated successfully']);
        } else {
            return view("management.panel.company-profile")->with('companyProfile', $companyProfile)->with(['error_message' => 'Failed to update profile']);
        }
    }

    // View all orders-panel
    public function allOrders()
    {
        return view('management.orders.allCustOrders');
    }


    // View open orders-panel
    public function openOrders()
    {
        return view('management.orders.open');
    }

    // View in progress orders-panel
    public function inProgressOrders()
    {
        return view('management.orders.in-progress');
    }

    // View completed orders-panel
    public function completedOrders()
    {
        return view('management.orders.completed');
    }


    // View delivered orders-panel
    public function deliveredOrders()
    {
        return view('management.orders.delivered');
    }


    // View all cancelled-panel
    public function cancelledOrders()
    {
        return view('management.orders.cancelled');
    }


    // Home Page -Dealer

    public function homeDealer()
    {
        return view('management.dealer.home');
    }

    // Statement Summary Page for Dealer
    public function indexDealer()
    {
        $dealer_id = User::find(Auth::user()->id);
        $dealer_id = $dealer_id->dealerInfo->account_id;
        $dealer_statement = new Statement;
        $dealer_statement = $dealer_statement->where('account_id', $dealer_id)->first();
        return view('management.dealer.index')->with('dealer_statement', $dealer_statement);
    }

    //Sales Summary for Dealer

    public function salesSummary()
    {

        return view('management.dealer.sales-summary');
    }

    // Profile for Dealer
    public function dealerProfile()
    {
        $dealer_id = User::find(Auth::user()->id);
        $dealer_id = $dealer_id->dealerInfo->account_id;
        $dealerProfile = new DealerInfo();
        $dealerProfile = $dealerProfile->where('account_id', $dealer_id)->first();

        return view('management.dealer.profile')->with('dealerProfile', $dealerProfile);
    }


    //Edit Profile for Dealer
    public function editdealerProfile()
    {
        $dealer_id = User::find(Auth::user()->id);
        $dealer_id = $dealer_id->dealerInfo->account_id;
        $dealerProfile = new DealerInfo();
        $dealerProfile = $dealerProfile->where('account_id', $dealer_id)->first();

        return view('management.dealer.edit-profile')->with('dealerProfile', $dealerProfile);
    }

    /** Update company profile**/

    public function updateDealerProfile(Request $request, $id)
    {

        $this->validate($request, array(

            'dealer_company_name' => 'required',
            'dealer_company_address_1' => 'required',
            'dealer_company_postcode' => 'required|digits:5',
            'dealer_company_city' => 'required'
        ));


        $dealerProfile = new DealerInfo();
        $dealerProfile = $dealerProfile->where('account_id', $id)->first();
        // $dealerProfile->full_name = $request->input('dealer_name');
        // $dealerProfile->save();

        $dealer_employment_address = $dealerProfile->employmentAddress;
        $dealer_employment_address->company_name = $request->input('dealer_company_name');
        $dealer_employment_address->company_address_1 = $request->input('dealer_company_address_1');
        $dealer_employment_address->company_address_2 = $request->input('dealer_company_address_2');
        $dealer_employment_address->company_address_3 = $request->input('dealer_company_address_3');
        $dealer_employment_address->company_postcode = $request->input('dealer_company_postcode');
        $dealer_employment_address->company_city = $request->input('dealer_company_city');
        $dealer_employment_address->save();




        // $dealer_mobile_contact = $dealerProfile->dealerMobileContact;
        // $dealer_mobile_contact->contact_num = $request->input('dealer_mobile_contact');
        // $dealer_mobile_contact->save();









        if ($dealer_employment_address) {
            return redirect()->route('shop.dashboard.dealer.profile')->with('dealerProfile', $dealerProfile)->with(['successful_message' => 'Profile updated successfully']);
        } else {
            return redirect()->route('shop.dashboard.dealer.profile')->with('dealerProfile', $dealerProfile)->with(['error_message' => 'Failed to update profile']);
        }
    }




    // Change Password
    public function modifyPassword()
    {
        return view('management.dealer.modifypassword');
    }

    // View Statments for dealers
    public function statements($month, $month_num, $year)
    {


        $dealer_id = Auth::user()->dealerInfo->account_id;


        $dealerProfile = DealerInfo::where('account_id', $dealer_id)->first();


        $customerPurchase = Purchase::where('dealer_id', $dealer_id)->get();





        $pdf = PDF::loadView('documents.statement.monthly-statement', compact('dealerProfile', 'customerPurchase', 'month', 'month_num', 'year'))->setPaper('A4');
        return $pdf->stream('statement.pdf');
    }

    // View Person In Charge for panel
    public function personInCharge()
    {
        return view('management.panel.person-in-charge');
    }
}
