<?php

use Illuminate\Database\Seeder;
use App\Models\Products\Product;
use App\Models\Categories\Category;
use App\Models\Categories\ProductType;
use App\Models\Categories\SubCategory;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $types = ProductType::all();

        /**
         * Electrical > Wiring
         */
        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'HDMI AudioVideo Cable',
            'price' => '10',
            'slug' => 'hdmi-audiovideo-cable',
            'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum gravida arcu vel laoreet. Nullam volutpat, nulla in tincidunt bibendum, neque dolor tempus arcu, vitae hendrerit ligula purus eu sem. Quisque nec purus neque. Nullam justo diam, ullamcorper eu nisl sed, molestie gravida nulla.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum gravida arcu vel laoreet. Nullam volutpat, nulla in tincidunt bibendum, neque dolor tempus arcu, vitae hendrerit ligula purus eu sem. Quisque nec purus neque. Nullam justo diam, ullamcorper eu nisl sed, molestie gravida nulla. Aliquam volutpat felis sit amet odio porttitor, vitae pretium erat dapibus. Nam lobortis orci id ultricies tincidunt. Nam lacinia bibendum magna vel sodales. Aliquam ac turpis ornare, pellentesque neque sed, venenatis ligula. Duis pretium dolor dignissim sem consectetur rhoncus. In faucibus, est vel luctus pulvinar, velit dui tincidunt lacus, a fringilla arcu nibh a risus. Vivamus commodo, dui in posuere sodales, enim est facilisis libero, nec imperdiet nibh magna in erat. Etiam est sem, aliquet vehicula est id, fringilla euismod sem.',
            'quality' => '1',
            'panel_id' => '1',
            'amount_sold' => '0'
        ]);

        $product->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product->slug . '/',
                'filename' => $product->slug . '_1.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product->slug . '/',
                'filename' => $product->slug . '_2.jpg'
            ]
        ]);

        $product->categories()->attach(
            Category::find(1)->id
        );

        $product->subcategories()->attach(
            SubCategory::find(1)->id
        );

        $product->colors()->createMany([
            [
                'color_name' => 'black',
                'name_slug' => 'black',
                'color_hex' => '#000000',
                'is_default' => 1
            ],
            [
                'color_name' => 'white',
                'name_slug' => 'white',
                'color_hex' => '#ffffff'
            ]

        ]);
    }
}
