<?php

use App\Models\Users\Customers\Favorite;
use Illuminate\Database\Seeder;

class FavouritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $favourite = Favorite::create([
            'user_id' => 2,
            'product_id' => '14',

        ]);

        $favourite1 = Favorite::create([
            'user_id' => 2,
            'product_id' => '10',

        ]);
    }
}
