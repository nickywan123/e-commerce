<?php

use App\Models\Purchases\Item;
use App\Models\Purchases\Order;
use App\Models\Purchases\Payment;
use App\Models\Purchases\Purchase;
use Illuminate\Database\Seeder;

class PurchaseTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purchase = new Purchase;
        $purchase->user_id = 1;
        $purchase->purchase_number = '0000000BSN2020000001';
        $purchase->purchase_status = 1;
        $purchase->purchase_type = 'card';
        $purchase->purchase_date = '15/04/2020';
        $purchase->purchase_amount = 39000;
        $purchase->save();

        $order1 = new Order;
        $order1->order_number = 'PO202004 000001';
        $order1->purchase_id = 1;
        $order1->panel_id = 1918000003;
        $order1->order_status = 'Placed';
        $order1->order_amount = 13000;
        $order1->delivery_date = "Pending";
        $order1->received_date = "";
        $order1->claim_status = "Processing";
        $order1->save();

        $order2 = new Order;
        $order2->order_number = 'PO202004 000002';
        $order2->purchase_id = 1;
        $order2->panel_id = 1918000001;
        $order2->order_status = 'Placed';
        $order2->order_amount = 26000;
        $order2->delivery_date = "Pending";
        $order2->received_date = "";
        $order2->claim_status = "Processing";
        $order2->save();

        $item1 = new Item;
        $item1->order_number = 'PO202004 000001';
        $item1->product_id = 2;
        $productInformation = array();
        $productInformation['product_temperature_id'] = 4;
        $productInformation['product_temperature'] = 'Cool White';

        $item1->product_information = $productInformation;
        $item1->quantity = 1;
        $item1->subtotal_price = 12000;
        $item1->delivery_fee = 1000;
        $item1->installation_fee = 0;
        $item1->status_id = 1;
        $item1->save();


        $item2 = new Item;
        $item2->order_number = 'PO202004 000001';
        $item2->product_id = 1;
        $productInformation = array();
        $productInformation['product_temperature_id'] = 4;
        $productInformation['product_temperature'] = 'Cool White';

        $item2->product_information = $productInformation;
        $item2->quantity = 1;
        $item2->subtotal_price = 12000;
        $item2->delivery_fee = 1000;
        $item2->installation_fee = 0;
        $item2->status_id = 1;
        $item2->save();

        $item3 = new Item;
        $item3->order_number = 'PO202004 000002';
        $item3->product_id = 6;
        $productInformation = array();
        $productInformation['product_temperature_id'] = 4;
        $productInformation['product_temperature'] = 'Cool White';

        $item3->product_information = $productInformation;
        $item3->quantity = 1;
        $item3->subtotal_price = 12000;
        $item3->delivery_fee = 1000;
        $item3->installation_fee = 0;
        $item3->status_id = 1;
        $item3->save();

        $payment = new Payment;
        $payment->purchase_number = '0000000BSN2020000001';
        $payment->gateway_string_result = '-';
        $payment->gateway_response_code = '00';
        $payment->auth_code = '123A';
        $payment->last_4_card_number = '-';
        $payment->expiry_date = '-';
        $payment->amount = 39000;
        $payment->gateway_eci = '-';
        $payment->gateway_security_key_res = '-';
        $payment->gateway_hash = '-';
        $payment->save();
    }
}
