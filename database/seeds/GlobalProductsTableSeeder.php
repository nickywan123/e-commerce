<?php

use App\Models\Globals\Products\Product;
use Illuminate\Database\Seeder;

use App\Models\Categories\Category;

class GlobalProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = Product::create([
            'product_code' => 'BU0417 0701 0100 0001',
            'name' => 'Single Round Eyeball White Casing With GU 10001',
            'name_slug' => 'single-round-eyeball-white-casing-with-gu-10001',
            'details' => 'Lamp Size: Diameter 80mm',
            'description' => 'Eyeball are the  recessed lights that provide a slim, unobtrusive style for quality, controlled lighting in kitchens, living rooms, galleries and more.',
            'quality_id' => 1,
            'product_rating' => 0
        ]);

        $product1->attributes()->createMany([
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Daylight 6000K'
            ],
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Warm White 3000K'
            ]
        ]);

        $product1->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product1->name_slug . '/',
                'filename' => $product1->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product1->name_slug . '/',
                'filename' => $product1->name_slug . '_2.jpg'
            ]
        ]);

        $product1->categories()->attach([
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'LED')->first()->id,
            Category::where('name', 'Eyeball')->first()->id,
        ]);

        // ---

        $product1_2 = Product::create([
            'product_code' => 'BU0417 0701 0100 0002',
            'name' => 'Single Round Eyeball White Casing With GU 20001',
            'name_slug' => 'single-round-eyeball-white-casing-with-gu-20001',
            'details' => 'Lamp Size: Diameter 80mm',
            'description' => 'Eyeball are the  recessed lights that provide a slim, unobtrusive style for quality, controlled lighting in kitchens, living rooms, galleries and more.',
            'quality_id' => 2,
            'product_rating' => 0
        ]);

        $product1_2->attributes()->createMany([
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Daylight 6000K'
            ],
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Warm White 3000K'
            ]
        ]);

        $product1_2->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product1->name_slug . '/',
                'filename' => $product1->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product1->name_slug . '/',
                'filename' => $product1->name_slug . '_2.jpg'
            ]
        ]);

        $product1_2->categories()->attach([
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'LED')->first()->id,
            Category::where('name', 'Eyeball')->first()->id,
        ]);

        // ---

        $product2 = Product::create([
            'product_code' => 'BU0417 0701 0100 0003',
            'name' => 'Single Round Eyeball White Casing With GU 10002',
            'name_slug' => 'single-round-eyeball-white-casing-with-gu-10002',
            'details' => 'Lamp Size: Diameter 90mm, Height 55mm, Cut-Hole Size: 75mm',
            'description' => 'Eyeball are the  recessed lights that provide a slim, unobtrusive style for quality, controlled lighting in kitchens, living rooms, galleries and more.',
            'quality_id' => 2,
            'product_rating' => 0
        ]);

        $product2->attributes()->createMany([
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Daylight 6000K'
            ],
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Warm White 3000K'
            ]
        ]);

        $product2->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product2->name_slug . '/',
                'filename' => $product2->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product2->name_slug . '/',
                'filename' => $product2->name_slug . '_2.jpg'
            ]
        ]);

        $product2->categories()->attach([
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'LED')->first()->id,
            Category::where('name', 'Eyeball')->first()->id,
        ]);

        // ---

        $product3 = Product::create([
            'product_code' => 'BU0417 0701 0200 0004',
            'name' => 'Single Round Downlight White Casing 12W 001',
            'name_slug' => 'single-round-downlight-white-casing-12w-001',
            'details' => 'Lamp Size: Diameter 105mm, Height 60mm, Cut-Hole Size: 90mm.',
            'description' => 'Downlights are the all-purpose of lighting fixtures as they are used as a component of a good lighting plan in most lighting projects. A downlight is most often used to provide general lighting in a specific space.',
            'quality_id' => 1,
            'product_rating' => 0
        ]);

        $product3->attributes()->createMany([
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Daylight 6000K'
            ],
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Warm White 3000K'
            ]
        ]);

        $product3->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product3->name_slug . '/',
                'filename' => $product3->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product3->name_slug . '/',
                'filename' => $product3->name_slug . '_2.jpg'
            ]
        ]);

        $product3->categories()->attach([
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'LED')->first()->id,
            Category::where('name', 'Downlight')->first()->id,
        ]);

        // ---

        $product3_2 = Product::create([
            'product_code' => 'BU0417 0701 0200 0005',
            'name' => 'Single Round Downlight White Casing 12W 001',
            'name_slug' => 'single-round-downlight-white-casing-12w-001',
            'details' => 'Lamp Size: Diameter 105mm, Height 60mm, Cut-Hole Size: 90mm.',
            'description' => 'Downlights are the all-purpose of lighting fixtures as they are used as a component of a good lighting plan in most lighting projects. A downlight is most often used to provide general lighting in a specific space.',
            'quality_id' => 3,
            'product_rating' => 0
        ]);

        $product3_2->attributes()->createMany([
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Daylight 6000K'
            ],
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Warm White 3000K'
            ]
        ]);

        $product3_2->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product3->name_slug . '/',
                'filename' => $product3->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product3->name_slug . '/',
                'filename' => $product3->name_slug . '_2.jpg'
            ]
        ]);

        $product3_2->categories()->attach([
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'LED')->first()->id,
            Category::where('name', 'Downlight')->first()->id,
        ]);

        // ---

        $product4 = Product::create([
            'product_code' => 'BU0417 0701 0200 0006',
            'name' => 'Single Round Downlight White Casing 15W 002',
            'name_slug' => 'single-round-downlight-white-casing-15w-002',
            'details' => 'Lamp Size: Diameter 130mm, Height 66mm, Cut-Hole Size: 110mm.',
            'description' => 'Downlights are the all-purpose of lighting fixtures as they are used as a component of a good lighting plan in most lighting projects. A downlight is most often used to provide general lighting in a specific space.',
            'quality_id' => 1,
            'product_rating' => 0
        ]);

        $product4->attributes()->createMany([
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Daylight 6000K'
            ],
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Warm White 3000K'
            ]
        ]);

        $product4->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product4->name_slug . '/',
                'filename' => $product4->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product4->name_slug . '/',
                'filename' => $product4->name_slug . '_2.jpg'
            ]
        ]);

        $product4->categories()->attach([
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'LED')->first()->id,
            Category::where('name', 'Downlight')->first()->id,
        ]);

        // ---

        $product5 = Product::create([
            'product_code' => 'BU0417 0702 0007',
            'name' => 'Recessed T-Bar Mirror Reflector Fitting With LED T8 Glass Tube 3 36W 001',
            'name_slug' => 'recessed-t-bar-mirror-reflector-fitting-with-led-t8-glass-tube-3-36w-001',
            'details' => 'Lamp Size : Length 1222mm, Width 605mm, Height 85mm',
            'description' => 'Mainly used for general lighting in offices, hypermarkets, hospital, complexes.',
            'quality_id' => 2,
            'product_rating' => 0
        ]);

        $product5->attributes()->createMany([
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Daylight 6000K'
            ],
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Warm White 3000K'
            ]
        ]);

        $product5->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product5->name_slug . '/',
                'filename' => $product5->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product5->name_slug . '/',
                'filename' => $product5->name_slug . '_2.jpg'
            ]
        ]);

        $product5->categories()->attach([
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'Office')->first()->id,
        ]);

        // ---

        $product6 = Product::create([
            'product_code' => 'BU0417 0705 0008',
            'name' => 'Table Light 001',
            'name_slug' => 'table-light-001',
            'details' => 'lamp Shade Size: xxx Lamp Base: xxxx',
            'description' => 'A table lamp can have many functions. It can be used practically and functionally at a work table or desk where direct light is important. A table lamp can also be used as a reading light in the home\'s coziest nook, and a table lamp can create nice and soothing lighting in all the rooms of the home.',
            'quality_id' => 1,
            'product_rating' => 0
        ]);

        $product6->attributes()->createMany([
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Daylight 6000K'
            ],
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Warm White 3000K'
            ]
        ]);

        $product6->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product6->name_slug . '/',
                'filename' => $product6->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product6->name_slug . '/',
                'filename' => $product6->name_slug . '_2.jpg'
            ]
        ]);

        $product6->categories()->attach([
            Category::where('name', 'Lightings')->first()->id,
            Category::where('name', 'Table Lights')->first()->id,
        ]);
    }
}
