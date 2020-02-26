<?php

use Illuminate\Database\Seeder;
use App\Models\Products\Product;
use App\Models\Categories\Category;
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

        $product = Product::create([
            'name' => 'product 1',
            'price' => '10',
            'sku' => '12345',
            'slug' => 'product-1',
            'panel_id' => '1',
            'amount_sold' => '0'
        ]);

        $product->images()->createMany([
            ['url' => 'https://via.placeholder.com/512'],
            ['url' => 'https://via.placeholder.com/512']
        ]);

        $product->categories()->attach(
            $categories->random(rand(1, 3))->pluck('id')->toArray()
        );

        $product->subcategories()->attach(
            $subcategories->random(rand(1, 3))->pluck('id')->toArray()
        );

        $product->colors()->createMany([
            [
                'color_name' => 'black',
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'blue',
                'color_hex' => '#0000ff'
            ]

        ]);

        $product->dimensions()->createMany([
            [
                'width' => '100',
                'height' => '200',
                'depth' => '120',
                'measurement_unit' => 'cm'
            ],
            [
                'width' => '300',
                'height' => '400',
                'depth' => '320',
                'measurement_unit' => 'cm'
            ]
        ]);

        $product->lengths()->createMany([
            [
                'length' => '1000',
                'measurement_unit' => 'cm'
            ],
            [
                'length' => '2000',
                'measurement_unit' => 'cm'
            ]
        ]);

        $product = null;
        // 

        $product = Product::create([
            'name' => 'product 2',
            'price' => '10',
            'sku' => '12345',
            'slug' => 'product-2',
            'panel_id' => '1',
            'amount_sold' => '0'
        ]);

        $product->images()->createMany([
            ['url' => 'https://via.placeholder.com/512'],
            ['url' => 'https://via.placeholder.com/512'],
            ['url' => 'https://via.placeholder.com/512']
        ]);

        $product->categories()->attach(
            $categories->random(rand(1, 3))->pluck('id')->toArray()
        );

        $product->subcategories()->attach(
            $subcategories->random(rand(1, 3))->pluck('id')->toArray()
        );

        $product->lengths()->createMany([
            [
                'length' => '1000',
                'measurement_unit' => 'cm'
            ],
            [
                'length' => '2000',
                'measurement_unit' => 'cm'
            ]
        ]);

        $product = null;
        // 

        $product = Product::create([
            'name' => 'product 3',
            'price' => '10',
            'sku' => '12345',
            'slug' => 'product-3',
            'panel_id' => '2',
            'amount_sold' => '0'
        ]);

        $product->images()->createMany([
            ['url' => 'https://via.placeholder.com/512']
        ]);

        $product->categories()->attach(
            $categories->random(rand(1, 3))->pluck('id')->toArray()
        );

        $product->subcategories()->attach(
            $subcategories->random(rand(1, 3))->pluck('id')->toArray()
        );

        $product->dimensions()->createMany([
            [
                'width' => '100',
                'height' => '200',
                'depth' => '120',
                'measurement_unit' => 'cm'
            ],
            [
                'width' => '300',
                'height' => '400',
                'depth' => '320',
                'measurement_unit' => 'cm'
            ]
        ]);

        $product = null;
        // 
    }
}
