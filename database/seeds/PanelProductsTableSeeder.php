<?php

use App\Models\Products\Product;
use Illuminate\Database\Seeder;

class PanelProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $panelProduct1 = new Product;
        $panelProduct1->global_product_id = 1;
        $panelProduct1->panel_account_id = 1913000001;
        $panelProduct1->product_details = 'Lorem ipsum sit dolor amet.';
        $panelProduct1->price = 12000;
        $panelProduct1->quality = 1;
        $panelProduct1->delivery_fee = 0;
        $panelProduct1->panel_promotion = 'We guarantee 100% satisfaction';
        $panelProduct1->product_rating = 0;
        $panelProduct1->save();

        $panelProduct1->attributes()->create([
            'panel_product_id' => $panelProduct1->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Daylight 6000K',
            'color_hex' => null
        ]);

        $panelProduct1->attributes()->create([
            'panel_product_id' => $panelProduct1->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Warm White 3000K',
            'color_hex' => null
        ]);
    }
}
