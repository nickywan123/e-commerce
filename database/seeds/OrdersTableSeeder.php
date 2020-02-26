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
        App\Models\Orders\Orders::create([

            'user_id' => '2',
            'dealer_id' => '191203',
            'product_code' => 'ABC',
            'product_name' => 'BCD',
            'product_image' => 'xxxx',
            'product_price' => '10',
            'product_desc' => 'product a',
            'product_dimension' => '7cmx8cmx8cm',
            'product_length' => '10cm',
            'delivery_date' => '2020-05-02',
            'order_status' => 'received',
            'order_details' => 'aha',
        ]);

        App\Models\Orders\Orders::create([

            'user_id' => '3',
            'dealer_id' => '191673',
            'product_code' => 'LSC',
            'product_name' => 'PWD',
            'product_image' => 'VVxx',
            'product_price' => '102',
            'product_desc' => 'product b',
            'product_dimension' => '6cmx8cmx8cm',
            'product_length' => '20cm',
            'delivery_date' => '2020-03-02',
            'order_status' => 'received',
            'order_details' => 'LALAL',
        ]);
    }
}
