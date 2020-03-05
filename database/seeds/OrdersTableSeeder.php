<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Orders\Order::create([

            'order_id' => '98682',
            'user_id' => '23',
            'dealer_id' => '191203',
            'product_code' => 'ABC',
            'product_name' => 'Table',
            'product_image' => 'xxxx',
            'product_price' => '10',
            'product_desc' => 'product a',
            'product_dimension' => '7cmx8cmx8cm',
            'product_length' => '10cm',
            'purchase_order' => 'xxxxx',
            'order_date' => '2020-03-02',
            'order_status' => 'received',
            'order_details' => 'aha',
        ]);

        App\Models\Orders\Order::create([

            'order_id' => '62342',
            'user_id' => '40',
            'dealer_id' => '191673',
            'product_code' => 'LSC',
            'product_name' => 'Chair',
            'product_image' => 'VVxx',
            'product_price' => '102',
            'product_desc' => 'product b',
            'product_dimension' => '6cmx8cmx8cm',
            'product_length' => '20cm',
            'order_date' => '2020-02-02',
            'purchase_order' => 'yyyy',
            'order_status' => 'received',
            'order_details' => 'LALAL',
        ]);
    }
}
