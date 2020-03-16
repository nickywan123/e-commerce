<?php

use App\Models\Products\Product;
use App\Models\Categories\Category;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Bedsheets & Mattresses
         */

        // Pillows

        // Memory Foam

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'EPABO Contour Memory Foam Pillow',
            'price' => '120',
            'slug' => 'epabo-contour-memory-foam',
            'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum gravida arcu vel laoreet. Nullam volutpat, nulla in tincidunt bibendum, neque dolor tempus arcu, vitae hendrerit ligula purus eu sem. Quisque nec purus neque. Nullam justo diam, ullamcorper eu nisl sed, molestie gravida nulla.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum gravida arcu vel laoreet. Nullam volutpat, nulla in tincidunt bibendum, neque dolor tempus arcu, vitae hendrerit ligula purus eu sem. Quisque nec purus neque. Nullam justo diam, ullamcorper eu nisl sed, molestie gravida nulla. Aliquam volutpat felis sit amet odio porttitor, vitae pretium erat dapibus. Nam lobortis orci id ultricies tincidunt. Nam lacinia bibendum magna vel sodales. Aliquam ac turpis ornare, pellentesque neque sed, venenatis ligula. Duis pretium dolor dignissim sem consectetur rhoncus. In faucibus, est vel luctus pulvinar, velit dui tincidunt lacus, a fringilla arcu nibh a risus. Vivamus commodo, dui in posuere sodales, enim est facilisis libero, nec imperdiet nibh magna in erat. Etiam est sem, aliquet vehicula est id, fringilla euismod sem.',
            'quality_id' => '1',
            'panel_id' => '1',
            'amount_sold' => '0',
            'average_rating' => '0'
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

        $product->categories()->attach([
            Category::where('name', 'Bedsheets & Mattresses')->first()->id,
            Category::where('name', 'Pillows')->first()->id,
            Category::where('name', 'Memory Foam')->first()->id,
        ]);

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

        $product->lengths()->createMany([
            [
                'length' => '1000',
                'measurement_unit' => 'cm',
                'is_default' => 1
            ],
            [
                'length' => '2000',
                'measurement_unit' => 'cm'
            ],
            [
                'length' => '3000',
                'measurement_unit' => 'cm'
            ]
        ]);

        foreach ($product->colors as $color) {
            $color->image()->create([
                'path' => 'uploads/images/products/' . $product->slug . '/' . $color->color_name . '/',
                'filename' => $product->slug . '_' . $color->color_name . '.jpg'
            ]);
        }

        // -- 
        $product = null;
        // --

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'EPABO Contour Memory Foam Pillow',
            'price' => '120',
            'slug' => 'epabo-contour-memory-foam',
            'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum gravida arcu vel laoreet. Nullam volutpat, nulla in tincidunt bibendum, neque dolor tempus arcu, vitae hendrerit ligula purus eu sem. Quisque nec purus neque. Nullam justo diam, ullamcorper eu nisl sed, molestie gravida nulla.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum gravida arcu vel laoreet. Nullam volutpat, nulla in tincidunt bibendum, neque dolor tempus arcu, vitae hendrerit ligula purus eu sem. Quisque nec purus neque. Nullam justo diam, ullamcorper eu nisl sed, molestie gravida nulla. Aliquam volutpat felis sit amet odio porttitor, vitae pretium erat dapibus. Nam lobortis orci id ultricies tincidunt. Nam lacinia bibendum magna vel sodales. Aliquam ac turpis ornare, pellentesque neque sed, venenatis ligula. Duis pretium dolor dignissim sem consectetur rhoncus. In faucibus, est vel luctus pulvinar, velit dui tincidunt lacus, a fringilla arcu nibh a risus. Vivamus commodo, dui in posuere sodales, enim est facilisis libero, nec imperdiet nibh magna in erat. Etiam est sem, aliquet vehicula est id, fringilla euismod sem.',
            'quality_id' => '1',
            'panel_id' => '1',
            'amount_sold' => '0',
            'average_rating' => '0'
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

        $product->categories()->attach([
            Category::where('name', 'Bedsheets & Mattresses')->first()->id,
            Category::where('name', 'Pillows')->first()->id,
            Category::where('name', 'Memory Foam')->first()->id,
        ]);

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

        $product->lengths()->createMany([
            [
                'length' => '1000',
                'measurement_unit' => 'cm',
                'is_default' => 1
            ],
            [
                'length' => '2000',
                'measurement_unit' => 'cm'
            ],
            [
                'length' => '3000',
                'measurement_unit' => 'cm'
            ]
        ]);

        foreach ($product->colors as $color) {
            $color->image()->create([
                'path' => 'uploads/images/products/' . $product->slug . '/' . $color->color_name . '/',
                'filename' => $product->slug . '_' . $color->color_name . '.jpg'
            ]);
        }

        // -- 
        $product = null;
        // --

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'Milemont Memory Foam Pillow',
            'price' => '120',
            'slug' => 'milemont-memory-foam-pillow',
            'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum gravida arcu vel laoreet. Nullam volutpat, nulla in tincidunt bibendum, neque dolor tempus arcu, vitae hendrerit ligula purus eu sem. Quisque nec purus neque. Nullam justo diam, ullamcorper eu nisl sed, molestie gravida nulla.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum gravida arcu vel laoreet. Nullam volutpat, nulla in tincidunt bibendum, neque dolor tempus arcu, vitae hendrerit ligula purus eu sem. Quisque nec purus neque. Nullam justo diam, ullamcorper eu nisl sed, molestie gravida nulla. Aliquam volutpat felis sit amet odio porttitor, vitae pretium erat dapibus. Nam lobortis orci id ultricies tincidunt. Nam lacinia bibendum magna vel sodales. Aliquam ac turpis ornare, pellentesque neque sed, venenatis ligula. Duis pretium dolor dignissim sem consectetur rhoncus. In faucibus, est vel luctus pulvinar, velit dui tincidunt lacus, a fringilla arcu nibh a risus. Vivamus commodo, dui in posuere sodales, enim est facilisis libero, nec imperdiet nibh magna in erat. Etiam est sem, aliquet vehicula est id, fringilla euismod sem.',
            'quality_id' => '1',
            'panel_id' => '1',
            'amount_sold' => '0',
            'average_rating' => '0'
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

        $product->categories()->attach([
            Category::where('name', 'Bedsheets & Mattresses')->first()->id,
            Category::where('name', 'Pillows')->first()->id,
            Category::where('name', 'Memory Foam')->first()->id,
        ]);

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

        $product->lengths()->createMany([
            [
                'length' => '1000',
                'measurement_unit' => 'cm',
                'is_default' => 1
            ],
            [
                'length' => '2000',
                'measurement_unit' => 'cm'
            ],
            [
                'length' => '3000',
                'measurement_unit' => 'cm'
            ]
        ]);

        foreach ($product->colors as $color) {
            $color->image()->create([
                'path' => 'uploads/images/products/' . $product->slug . '/' . $color->color_name . '/',
                'filename' => $product->slug . '_' . $color->color_name . '.jpg'
            ]);
        }

        // -- 
        $product = null;
        // --

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'COZSINOOR Hotel Collection Pillows for Sleeping',
            'price' => '120',
            'slug' => 'cozsinoor-hotel-collection-pillows-for-sleeping',
            'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum gravida arcu vel laoreet. Nullam volutpat, nulla in tincidunt bibendum, neque dolor tempus arcu, vitae hendrerit ligula purus eu sem. Quisque nec purus neque. Nullam justo diam, ullamcorper eu nisl sed, molestie gravida nulla.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum gravida arcu vel laoreet. Nullam volutpat, nulla in tincidunt bibendum, neque dolor tempus arcu, vitae hendrerit ligula purus eu sem. Quisque nec purus neque. Nullam justo diam, ullamcorper eu nisl sed, molestie gravida nulla. Aliquam volutpat felis sit amet odio porttitor, vitae pretium erat dapibus. Nam lobortis orci id ultricies tincidunt. Nam lacinia bibendum magna vel sodales. Aliquam ac turpis ornare, pellentesque neque sed, venenatis ligula. Duis pretium dolor dignissim sem consectetur rhoncus. In faucibus, est vel luctus pulvinar, velit dui tincidunt lacus, a fringilla arcu nibh a risus. Vivamus commodo, dui in posuere sodales, enim est facilisis libero, nec imperdiet nibh magna in erat. Etiam est sem, aliquet vehicula est id, fringilla euismod sem.',
            'quality_id' => '1',
            'panel_id' => '1',
            'amount_sold' => '0',
            'average_rating' => '0'
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

        $product->categories()->attach([
            Category::where('name', 'Bedsheets & Mattresses')->first()->id,
            Category::where('name', 'Pillows')->first()->id,
            Category::where('name', 'Memory Foam')->first()->id,
        ]);

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

        $product->lengths()->createMany([
            [
                'length' => '1000',
                'measurement_unit' => 'cm',
                'is_default' => 1
            ],
            [
                'length' => '2000',
                'measurement_unit' => 'cm'
            ],
            [
                'length' => '3000',
                'measurement_unit' => 'cm'
            ]
        ]);

        foreach ($product->colors as $color) {
            $color->image()->create([
                'path' => 'uploads/images/products/' . $product->slug . '/' . $color->color_name . '/',
                'filename' => $product->slug . '_' . $color->color_name . '.jpg'
            ]);
        }
    }
}
