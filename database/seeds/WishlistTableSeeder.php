<?php

use Illuminate\Database\Seeder;

class WishlistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $wishlist = Banner::create([
            'text_banner' => 'Image1',
            'text_description' => 'xxxxxxx',
            'photo' => 'Shop_Page.jpg'
        ]);
    }
}
