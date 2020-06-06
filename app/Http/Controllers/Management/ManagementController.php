<?php

namespace App\Http\Controllers\Management;

use PDF;
use Auth;
use Carbon\Carbon;
use App\Models\Users\User;
use Illuminate\Http\Request;
use App\Models\Globals\State;
use App\Models\Globals\Marital;
use App\Models\Purchases\Order;
use App\Models\Purchases\Purchase;
use App\Http\Controllers\Controller;
use App\Models\Users\Panels\PanelInfo;
use App\Models\Users\Dealers\Statement;
use App\Models\Users\Dealers\DealerInfo;
use App\Models\Users\Dealers\DealerSales;
use App\Users\Dealers\Statement as DealersStatement;

class ManagementController extends Controller
{

    // Return Shop -> Panel -> All Orders-> index
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $panel_id = $user->panelInfo->account_id;

        //Get today sales for panel
        $todayOrders = new Order;
        $todayOrders = $todayOrders->where('panel_id', $panel_id)->whereDate('created_at', Carbon::today())->sum('order_amount');

        // Get current month
        $now = Carbon::now();
        $month = $now->format('m');

        //Get monthly sales for panel
        $monthlyOrders = new Order;
        $monthlyOrders = $monthlyOrders->where('panel_id', $panel_id)->whereMonth('created_at', $month)->sum('order_amount');

        // Get total number of pending delivery orders for panel
        $totalPendingDelivery = new Order;
        $totalPendingDelivery = $totalPendingDelivery->where('panel_id', $panel_id)->where('delivery_date', 'Pending')->count();

        //Get total number of delivery orders yet to be delivered for panel
        $status = [1000, 1001, 1002];
        $totalDelivery = new Order;
        $totalDelivery = $totalDelivery->where('panel_id', $panel_id)->whereIn('order_status', $status)->count();

        //Get total number of pending claim
        $totalPendingClaim = new Order;
        $totalPendingClaim = $totalPendingClaim->where('panel_id', $panel_id)->where('claim_status', '0')->count();

        //dd($totalPendingClaim);

        return view('management.panel.home')
            ->with('todayOrders', $todayOrders)
            ->with('monthlyOrders', $monthlyOrders)
            ->with('totalPendingDelivery', $totalPendingDelivery)
            ->with('totalDelivery', $totalDelivery)
            ->with('totalPendingClaim', $totalPendingClaim);
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
        $states= State::all();

        $panel_id = User::find(Auth::user()->id);
        $panel_id = $panel_id->panelInfo->account_id;
        $companyProfile = new PanelInfo();
        $companyProfile = $companyProfile->where('account_id', $panel_id)->first();
        return view("management.panel.company-profile-edit")
               ->with('companyProfile', $companyProfile)
               ->with('states',$states);
    }



    /** Update company profile**/

    public function updateProfile(Request $request, $id)
    {

        $this->validate($request, array(

            'company_billing_address_1' => 'required',
            'company_billing_postcode' => 'required|digits:5',
            'company_billing_city' => 'required',
            'company_address_1' => 'required',
            'postcode' => 'required|digits:5',
            'city' => 'required',
            'company_phone_number' => 'required|digits:10',

        ));


        $companyProfile = new PanelInfo();
        $companyProfile = $companyProfile->where('account_id', $id)->first();

        $correspondence_address = $companyProfile->correspondenceAddress;
        $correspondence_address->address_1 = $request->input('company_address_1');
        $correspondence_address->address_2 = $request->input('company_address_2');
        $correspondence_address->address_3 = $request->input('company_address_3');
        $correspondence_address->postcode = $request->input('postcode');
        $correspondence_address->city = $request->input('city');
        $correspondence_address->state_id = $request->input('state');

        $correspondence_address->save();

        $billing_address = $companyProfile->billingAddress;
        $billing_address->address_1 = $request->input('company_billing_address_1');
        $billing_address->address_2 = $request->input('company_billing_address_2');
        $billing_address->address_3 = $request->input('company_billing_address_3');
        $billing_address->postcode = $request->input('company_billing_postcode');
        $billing_address->city = $request->input('company_billing_city');
        $billing_address->state_id = $request->input('billing_state');
        $billing_address->save();



        $companyProfile->company_phone = $request->input('company_phone_number');
        $companyProfile->save();

        if ($companyProfile && $correspondence_address && $billing_address) {
            return redirect()->route('management.company.profile')->with('companyProfile', $companyProfile)->with(['successful_message' => 'Profile updated successfully']);
        } else {
            return redirect()->route('management.company.profile')->with('companyProfile', $companyProfile)->with(['error_message' => 'Failed to update profile']);
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


    // Home Page-Dealer

    public function homeDealer()
    {
        //Get dealer account id
        $dealer_id = User::find(Auth::user()->id);
        $dealer_id = $dealer_id->dealerInfo->account_id;

        //Get today sales for dealer
        $todaySales = new DealerSales;
        $todaySales = $todaySales->where('account_id', $dealer_id)->whereDate('created_at', Carbon::today())->sum('order_amount');

        // Get current month
        $now = Carbon::now();
        $month = $now->format('m');

        //Get monthly sales for panel
        $monthlySales = new DealerSales;
        $monthlySales = $monthlySales->where('account_id', $dealer_id)->whereMonth('created_at', $month)->sum('order_amount');

        return view('management.dealer.home')
            ->with('todaySales', $todaySales)
            ->with('monthlySales', $monthlySales);
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
        // $dealer_id = User::find(Auth::user()->id);
        // $dealer_id = $dealer_id->dealerInfo->account_id;
        // $dealerProfile = new DealerInfo();
        // $dealerProfile = $dealerProfile->where('account_id', $dealer_id)->first();
        $maritals = Marital::all();

        $user = User::find(Auth::user()->id);
        $dealerProfile = $user->dealerInfo;

        return view('management.dealer.profile')
            ->with('dealerProfile', $dealerProfile)
            ->with('maritals', $maritals);
    }


    //Edit Profile for Dealer
    public function editdealerProfile()
    {
        $maritals = Marital::all();
        $states= State::all();

        $user = User::find(Auth::user()->id);
        $dealerProfile = $user->dealerInfo;
        return view('management.dealer.edit-profile')
            ->with('dealerProfile', $dealerProfile)
            ->with('maritals', $maritals)
            ->with('states',$states);
    }

    /** Update dealer profile**/

    public function updateDealerProfile(Request $request, $id)
    {
        $this->validate($request, array(
            'dealer_company_name' => 'required',
            'dealer_company_address_1' => 'required',
            'dealer_company_postcode' => 'required|digits:5',
            'dealer_company_city' => 'required',
            'spouse_name' =>  'required_if:marital_id,2',
            'spouse_occupation' => 'required_if:marital_id,2',
            'spouse_contact' => 'required_if:marital_id,2|nullable|min:10',
            'spouse_email' => 'required_if:marital_id,2|nullable|email|string'
        ));

        $dealerInfo = new DealerInfo();
        $dealerInfo = $dealerInfo->where('account_id', $id)->first();

        //update marital status 
        $dealerInfo->marital_id = $request->input('marital_id');
        $dealerInfo->save();

        //update dealer employment address
        $dealer_employment_address = $dealerInfo->employmentAddress;
        $dealer_employment_address->company_name = $request->input('dealer_company_name');
        $dealer_employment_address->company_address_1 = $request->input('dealer_company_address_1');
        $dealer_employment_address->company_address_2 = $request->input('dealer_company_address_2');
        $dealer_employment_address->company_address_3 = $request->input('dealer_company_address_3');
        $dealer_employment_address->company_postcode = $request->input('dealer_company_postcode');
        $dealer_employment_address->company_city = $request->input('dealer_company_city');
        $dealer_employment_address->company_state_id = $request->input('dealer_company_state');
        $dealer_employment_address->save();

        //update dealer spouse information
        $dealer_spouse_information = $dealerInfo->dealerSpouse;
        $dealer_spouse_information->spouse_name = $request->input('spouse_name');
        $dealer_spouse_information->spouse_occupation = $request->input('spouse_occupation');
        $dealer_spouse_information->spouse_contact_mobile = $request->input('spouse_contact');
        $dealer_spouse_information->spouse_email = $request->input('spouse_email');
        $dealer_spouse_information->save();




        if ($dealerInfo && $dealer_employment_address && $dealer_spouse_information) {
            return redirect()->route('shop.dashboard.dealer.profile')->with('dealerProfile', $dealerInfo)->with(['successful_message' => 'Profile updated successfully']);
        } else {
            return redirect()->route('shop.dashboard.dealer.profile')->with('dealerProfile', $dealerInfo)->with(['error_message' => 'Failed to update profile']);
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

        $userInfo = Auth::user()->userInfo;
        
        $customerPurchase = Purchase::where('dealer_id', $dealer_id)->get();





        $pdf = PDF::loadView('documents.statement.monthly-statement', compact('dealerProfile', 'customerPurchase','userInfo', 'month', 'month_num', 'year'))->setPaper('A4');
        return $pdf->stream('statement.pdf');
    }

    // View Person In Charge for panel
    public function personInCharge()
    {
        return view('management.panel.person-in-charge');
    }
}
