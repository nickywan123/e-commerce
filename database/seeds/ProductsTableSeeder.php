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

        // -- 
        $product = null;
        // --

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'Single Round Eyeball White Casing With GU 10001',
            'price' => '9000',
            'slug' => 'single-round-eyeball-white-casing-with-gu-10001',
            'summary' => 'Eyeball are the  recessed lights that provide a slim, unobtrusive style for quality, controlled lighting in kitchens, living rooms, galleries and more. ',
            'description' => 'Eyeball are the  recessed lights that provide a slim, unobtrusive style for quality, controlled lighting in kitchens, living rooms, galleries and more. ',
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
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'LED')->first()->id,
            Category::where('name', 'Eyeball')->first()->id,
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
            'name' => 'Single Round Eyeball White Casing With GU 10002',
            'price' => '9000',
            'slug' => 'single-round-eyeball-white-casing-with-gu-10002',
            'summary' => 'Eyeball are the  recessed lights that provide a slim, unobtrusive style for quality, controlled lighting in kitchens, living rooms, galleries and more. ',
            'description' => 'Eyeball are the  recessed lights that provide a slim, unobtrusive style for quality, controlled lighting in kitchens, living rooms, galleries and more. ',
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
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'LED')->first()->id,
            Category::where('name', 'Eyeball')->first()->id,
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
            'name' => 'Single Round Downlight White Casing 12W 001',
            'price' => '12000',
            'slug' => 'single-round-downlight-white-casing-12w-001',
            'summary' => 'Downlights are the all-purpose of lighting fixtures as they are used as a component of a good lighting plan in most lighting projects. A downlight is most often used to provide general lighting in a specific space.',
            'description' => 'Downlights are the all-purpose of lighting fixtures as they are used as a component of a good lighting plan in most lighting projects. A downlight is most often used to provide general lighting in a specific space.',
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
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'LED')->first()->id,
            Category::where('name', 'Downlight')->first()->id,
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
            'name' => 'Single Round Downlight White Casing 15W 002',
            'price' => '14000',
            'slug' => 'single-round-downlight-white-casing-15w-002',
            'summary' => 'Downlights are the all-purpose of lighting fixtures as they are used as a component of a good lighting plan in most lighting projects. A downlight is most often used to provide general lighting in a specific space.',
            'description' => 'Downlights are the all-purpose of lighting fixtures as they are used as a component of a good lighting plan in most lighting projects. A downlight is most often used to provide general lighting in a specific space.',
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
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'LED')->first()->id,
            Category::where('name', 'Downlight')->first()->id,
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
            'name' => 'Recessed T-Bar Mirror Reflector Fitting With LED T8 Glass Tube 3 36W 001',
            'price' => '0',
            'slug' => 'recessed-t-bar-mirror-reflector-fitting-with-led-t8-glass-tube-3-36w-001',
            'summary' => 'Mainly used for general lighting in offices, hypermarkets, hospital, complexes.',
            'description' => 'Mainly used for general lighting in offices, hypermarkets, hospital, complexes.',
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
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'Office')->first()->id,
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
            'name' => 'Table Light 001',
            'price' => '0',
            'slug' => 'table-light-001',
            'summary' => 'A table lamp can have many functions. It can be used practically and functionally at a work table or desk where direct light is important. A table lamp can also be used as a reading light in the home\'s coziest nook, and a table lamp can create nice and soothing lighting in all the rooms of the home.',
            'description' => 'A table lamp can have many functions. It can be used practically and functionally at a work table or desk where direct light is important. A table lamp can also be used as a reading light in the home\'s coziest nook, and a table lamp can create nice and soothing lighting in all the rooms of the home.',
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
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'Table Lights')->first()->id,
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
            'name' => 'Cloth Curtain Multi Colored',
            'price' => '0',
            'slug' => 'cloth-curtain-multi-colored',
            'summary' => 'Curtain that blocks lights and make your home feel comfy.',
            'description' => 'Curtain that blocks lights and make your home feel comfy.',
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
            ],
            [
                'path' => 'uploads/images/products/' . $product->slug . '/',
                'filename' => $product->slug . '_3.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product->slug . '/',
                'filename' => $product->slug . '_4.jpg'
            ]
        ]);

        $product->categories()->attach([
            Category::where('name', 'Curtains')->first()->id
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
