<?php

use Illuminate\Database\Seeder;

use App\Models\PromotionPage\Banner;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  
  
  
  
     public function run()
    {
        $banner = Banner::create([
            'text_banner' => 'Image1',
            'text_description' => 'xxxxxxx',
            'photo' => 'Shop_Page.jpg'
        ]);


        $banner2 = Banner::create([
            'text_banner' => 'Image2',
            'text_description' => 'yyyyy',
            'photo' => 'Home_Kitchen.jpg'
        ]);

    }
}
