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
         * Electrical -> Wiring
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
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
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
            ],
            [
                'length' => '3000',
                'measurement_unit' => 'cm'
            ]
        ]);

        $product = null;
        // 

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'KM Auxiliary Cable',
            'price' => '10',
            'slug' => 'km-auxiliary-cable',
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
            ],
            [
                'path' => 'uploads/images/products/' . $product->slug . '/',
                'filename' => $product->slug . '_3.jpg'
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
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
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
            ],
            [
                'length' => '3000',
                'measurement_unit' => 'cm'
            ]
        ]);

        $product = null;
        // 

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'LWD 2020NSP 5.0M Electrical Accessories',
            'price' => '10',
            'slug' => 'lwd-2020nsp-5.0m-electrical-accessories',
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
            ],
            [
                'path' => 'uploads/images/products/' . $product->slug . '/',
                'filename' => $product->slug . '_3.jpg'
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
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
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
            ],
            [
                'length' => '3000',
                'measurement_unit' => 'cm'
            ]
        ]);

        $product = null;
        // 

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'LWD Pole Switch',
            'price' => '10',
            'slug' => 'lwd-pole-switch',
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
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
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
            ],
            [
                'length' => '3000',
                'measurement_unit' => 'cm'
            ]
        ]);

        $product = null;
        //

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'SGL Shenggelan UTP Cat 5e LAN Cable Ethernet',
            'price' => '10',
            'slug' => 'sgl-shenggelan-utp-cat-5e-lan-cable-ethernet',
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
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
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
            ],
            [
                'length' => '3000',
                'measurement_unit' => 'cm'
            ]
        ]);

        $product = null;
        //

        /**
         * Electrical -> Lamp
         */

        // Floor Lamp

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'LED Paper Lantern 8',
            'price' => '10',
            'slug' => 'led-paper-lantern-8',
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
            ],
            [
                'path' => 'uploads/images/products/' . $product->slug . '/',
                'filename' => $product->slug . '_3.jpg'
            ]
        ]);

        $product->categories()->attach(
            Category::find(1)->id
        );

        $product->subcategories()->attach(
            SubCategory::find(2)->id
        );

        $product->productTypes()->attach(
            ProductType::find(1)
        );

        $product->colors()->createMany([
            [
                'color_name' => 'black',
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
            ]

        ]);

        $product->dimensions()->createMany([
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
        ]);

        $product = null;
        //

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'JOOFO Floor Lamp',
            'price' => '10',
            'slug' => 'joofo-floor-lamp',
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
            ],
            [
                'path' => 'uploads/images/products/' . $product->slug . '/',
                'filename' => $product->slug . '_3.jpg'
            ]
        ]);

        $product->categories()->attach(
            Category::find(1)->id
        );

        $product->subcategories()->attach(
            SubCategory::find(2)->id
        );

        $product->productTypes()->attach(
            ProductType::find(1)
        );

        $product->colors()->createMany([
            [
                'color_name' => 'black',
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
            ]

        ]);

        $product->dimensions()->createMany([
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
        ]);

        $product = null;
        //

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'Globe Electric 12937 Downlight Holden Floor Lamp',
            'price' => '10',
            'slug' => 'globe-electric-12937-downlight-holden-floor-lamp',
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
            SubCategory::find(2)->id
        );

        $product->productTypes()->attach(
            ProductType::find(1)
        );

        $product->colors()->createMany([
            [
                'color_name' => 'black',
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
            ]

        ]);

        $product->dimensions()->createMany([
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
        ]);

        $product = null;

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'Simple Designs Home LF2000 BLK Mother Daughter Floor Lamp',
            'price' => '10',
            'slug' => 'simple-designs-home-lf2000-blk-mother-daughter-floor-lamp',
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
            SubCategory::find(2)->id
        );

        $product->productTypes()->attach(
            ProductType::find(1)
        );

        $product->colors()->createMany([
            [
                'color_name' => 'black',
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
            ]

        ]);

        $product->dimensions()->createMany([
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
        ]);

        $product = null;
        //

        // Table Lamps

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'limelights Lt2024 WHT Brushed Steel Lamp',
            'price' => '10',
            'slug' => 'limelights-lt2024-wht-brushed-steel-lamp',
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
            ],
            [
                'path' => 'uploads/images/products/' . $product->slug . '/',
                'filename' => $product->slug . '_3.jpg'
            ]
        ]);

        $product->categories()->attach(
            Category::find(1)->id
        );

        $product->subcategories()->attach(
            SubCategory::find(2)->id
        );

        $product->productTypes()->attach(
            ProductType::find(2)
        );

        $product->colors()->createMany([
            [
                'color_name' => 'black',
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
            ]

        ]);

        $product->dimensions()->createMany([
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
        ]);

        $product = null;
        //

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'TaoTronics LED Desk Lamp',
            'price' => '10',
            'slug' => 'taotronics-led-desk-lamp',
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
            ],
            [
                'path' => 'uploads/images/products/' . $product->slug . '/',
                'filename' => $product->slug . '_3.jpg'
            ]
        ]);

        $product->categories()->attach(
            Category::find(1)->id
        );

        $product->subcategories()->attach(
            SubCategory::find(2)->id
        );

        $product->productTypes()->attach(
            ProductType::find(2)
        );

        $product->colors()->createMany([
            [
                'color_name' => 'black',
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
            ]

        ]);

        $product->dimensions()->createMany([
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
        ]);

        $product = null;
        //

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'Decor Therapy MP1054 Table Lamp',
            'price' => '10',
            'slug' => 'decor-therapy-mp1054-table-lamp',
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
            SubCategory::find(2)->id
        );

        $product->productTypes()->attach(
            ProductType::find(2)
        );

        $product->colors()->createMany([
            [
                'color_name' => 'black',
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
            ]

        ]);

        $product->dimensions()->createMany([
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
        ]);

        $product = null;
        //

        // Wall Lamps

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'Wray Modern Industrial Up Down Swing Arm Wall Lights',
            'price' => '10',
            'slug' => 'wray-modern-industrial-up-down-swing-arm-wall-lights',
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
            SubCategory::find(2)->id
        );

        $product->productTypes()->attach(
            ProductType::find(3)
        );

        $product->colors()->createMany([
            [
                'color_name' => 'black',
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
            ]

        ]);

        $product->dimensions()->createMany([
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
        ]);

        $product = null;
        //

        $product = Product::create([
            'unique_id' => mt_rand(1000000, 9999999),
            'name' => 'Rivet Mid Century Wall Sconce',
            'price' => '10',
            'slug' => 'rivet-mid-century-wall-sconce',
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
            ],
            [
                'path' => 'uploads/images/products/' . $product->slug . '/',
                'filename' => $product->slug . '_3.jpg'
            ]
        ]);

        $product->categories()->attach(
            Category::find(1)->id
        );

        $product->subcategories()->attach(
            SubCategory::find(2)->id
        );

        $product->productTypes()->attach(
            ProductType::find(3)
        );

        $product->colors()->createMany([
            [
                'color_name' => 'black',
                'color_hex' => '#000000'
            ],
            [
                'color_name' => 'white',
                'color_hex' => '#ffffff'
            ]

        ]);

        $product->dimensions()->createMany([
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
            [
                'width' => '120',
                'height' => '100',
                'depth' => '100',
                'measurement_unit' => 'cm'
            ],
        ]);

        $product = null;
        //
    }
}
