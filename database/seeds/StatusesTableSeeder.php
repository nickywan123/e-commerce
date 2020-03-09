<?php

use Illuminate\Database\Seeder;

use App\Models\Globals\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'id' => 1001,
            'name' => 'Order Placed',
            'description' => 'Status for order status.'
        ]);

        Status::create([
            'id' => 1002,
            'name' => 'Order Shipped',
            'description' => 'Status for order status.'
        ]);

        Status::create([
            'id' => 1003,
            'name' => 'Order Delivered',
            'description' => 'Status for order status.'
        ]);

        Status::create([
            'id' => 2001,
            'name' => 'Active',
            'description' => 'Status for cart item status.'
        ]);

        Status::create([
            'id' => 2002,
            'name' => 'Removed',
            'description' => 'Status for cart item status.'
        ]);

        Status::create([
            'id' => 2003,
            'name' => 'Item Checked Out',
            'description' => 'Status for cart item status.'
        ]);
    }
}
