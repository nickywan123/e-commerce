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
            'product_code' => 'BU0417 0702 0001',
            'name' => 'Recessed T-Bar Mirror Reflector Fitting With LED T8 Glass Tube 3 36W 001',
            'name_slug' => 'recessed-t-bar-mirror-reflector-fitting-with-led-t8-glass-tube-3-36w-001',
            'details' => 'Lamp Size: Length 1222mm, Width 605mm, Height 85mm. 3 * 18W LED T8 Tube 1 year warranty.',
            'description' => 'Mainly used for general lighting in offices, hypermarkets, hospital, complexes.',
            'quality_id' => 1,
            'product_rating' => 0
        ]);

        $product5->attributes()->createMany([
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Daylight'
            ],
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Warm White'
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
            'product_code' => 'BU0417 0705 0001',
            'name' => 'Table Light 001',
            'name_slug' => 'table-light-001',
            'details' => 'lamp Shade Size: xxx, Lamp Base: xxxx, comes with led bulb.',
            'description' => 'A table lamp can have many functions. It can be used practically and functionally at a work table or desk where direct light is important. A table lamp can also be used as a reading light in the home\'s coziest nook, and a table lamp can create nice and soothing lighting in all the rooms of the home.',
            'quality_id' => 3,
            'product_rating' => 5
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

        // ---

        $product7 = Product::create([
            'product_code' => 'BU0321 0101 0001',
            'name' => 'Bedsheet Standard',
            'name_slug' => 'bedsheet-standard',
            'details' => '100% Italian cotton come with quilt cover (140cm * 210cm, 210cm * 210cm, 247cm * 247cm)',
            'description' => 'Suitable for single, small family and large family. ',
            'quality_id' => 1,
            'product_rating' => 5
        ]);

        $product7->attributes()->createMany([
            [
                'attribute_type' => 'size',
                'attribute_name' => 'Single (91cm * 190cm)'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => 'Queen (152cm * 190cm) '
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => 'King (183cm * 190cm)'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Beige',
                'color_hex' => '#f5f5dc'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Beige Pink',
                'color_hex' => '#b39283'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Black',
                'color_hex' => '#000000'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Blue',
                'color_hex' => '#0000FF'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Light Grey',
                'color_hex' => '#D3D3D3'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Pink',
                'color_hex' => '#fadadd'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Red',
                'color_hex' => '#FF0000'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White',
                'color_hex' => '#ffffff'
            ],
        ]);

        $product7->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product7->name_slug . '/',
                'filename' => $product7->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product7->name_slug . '/',
                'filename' => $product7->name_slug . '_2.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product7->name_slug . '/',
                'filename' => $product7->name_slug . '_3.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product7->name_slug . '/',
                'filename' => $product7->name_slug . '_4.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product7->name_slug . '/',
                'filename' => $product7->name_slug . '_5.jpg'
            ]
        ]);

        $product7->categories()->attach([
            Category::where('name', 'Bedsheets & Mattresses')->first()->id,
            Category::where('name', 'Bedsheets')->first()->id,
        ]);

        // ---

        $product8 = Product::create([
            'product_code' => 'BU0321 0101 0002',
            'name' => 'Bedsheet Moderate',
            'name_slug' => 'bedsheet-moderate',
            'details' => 'Super fine Italian cotton come with quilt cover (140cm * 210cm, 210cm * 210cm, 247cm * 247cm)',
            'description' => 'Suitable for single, small family and large family. ',
            'quality_id' => 2,
            'product_rating' => 5
        ]);

        $product8->attributes()->createMany([
            [
                'attribute_type' => 'size',
                'attribute_name' => 'Single (91cm * 190cm)'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => 'Queen (152cm * 190cm) '
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => 'King (183cm * 190cm)'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Beige',
                'color_hex' => '#f5f5dc'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Beige Pink',
                'color_hex' => '#b39283'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Black',
                'color_hex' => '#000000'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Blue',
                'color_hex' => '#0000FF'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Light Grey',
                'color_hex' => '#D3D3D3'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Pink',
                'color_hex' => '#fadadd'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Red',
                'color_hex' => '#FF0000'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White',
                'color_hex' => '#ffffff'
            ],
        ]);

        $product8->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product8->name_slug . '/',
                'filename' => $product8->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product8->name_slug . '/',
                'filename' => $product8->name_slug . '_2.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product8->name_slug . '/',
                'filename' => $product8->name_slug . '_3.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product8->name_slug . '/',
                'filename' => $product8->name_slug . '_4.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product8->name_slug . '/',
                'filename' => $product8->name_slug . '_5.jpg'
            ]
        ]);

        $product8->categories()->attach([
            Category::where('name', 'Bedsheets & Mattresses')->first()->id,
            Category::where('name', 'Bedsheets')->first()->id,
        ]);

        // ---

        $product9 = Product::create([
            'product_code' => 'BU0321 0101 0003',
            'name' => 'Bedsheet Premium',
            'name_slug' => 'bedsheet-premium',
            'details' => 'Super fine Italian cotton sateen with border from Turkey (super fine embroidery with woven backing) come with quilt cover (140cm * 210cm, 210cm * 210cm, 247cm * 247cm)',
            'description' => 'Suitable for single, small family and large family. ',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product9->attributes()->createMany([
            [
                'attribute_type' => 'size',
                'attribute_name' => 'Single (91cm * 190cm)'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => 'Queen (152cm * 190cm) '
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => 'King (183cm * 190cm)'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Beige',
                'color_hex' => '#f5f5dc'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Beige Pink',
                'color_hex' => '#b39283'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Black',
                'color_hex' => '#000000'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Blue',
                'color_hex' => '#0000FF'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Light Grey',
                'color_hex' => '#D3D3D3'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Pink',
                'color_hex' => '#fadadd'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Red',
                'color_hex' => '#FF0000'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White',
                'color_hex' => '#ffffff'
            ],
        ]);

        $product9->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product9->name_slug . '/',
                'filename' => $product9->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product9->name_slug . '/',
                'filename' => $product9->name_slug . '_2.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product9->name_slug . '/',
                'filename' => $product9->name_slug . '_3.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product9->name_slug . '/',
                'filename' => $product9->name_slug . '_4.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product9->name_slug . '/',
                'filename' => $product9->name_slug . '_5.jpg'
            ]
        ]);

        $product9->categories()->attach([
            Category::where('name', 'Bedsheets & Mattresses')->first()->id,
            Category::where('name', 'Bedsheets')->first()->id,
        ]);

        // ---

        $product10 = Product::create([
            'product_code' => 'BU0321 0203 0001',
            'name' => 'Armadio',
            'name_slug' => 'cabinet-storage-unit',
            'details' => 'Cabinet\'s height: 1219.2mm, width: 457.2mm, length: 914.4mm. Colour white.',
            'description' => 'Suitable for storing varities of items.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product10->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product10->name_slug . '/',
                'filename' => $product10->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product10->name_slug . '/',
                'filename' => $product10->name_slug . '_2.jpg'
            ]
        ]);

        $product10->categories()->attach([
            Category::where('name', 'Cupboards')->first()->id,
            Category::where('name', 'Storage Shelves / Units')->first()->id,
        ]);

        // ---

        $product11 = Product::create([
            'product_code' => 'BU0321 0200 0001',
            'name' => 'Bookcases Premium',
            'name_slug' => 'bookcases-premium',
            'details' => 'Cabinet\'s height: 1219.2mm, width: 457.2mm, length: 914.4mm. Colour white.',
            'description' => 'Suitable for storing varities of items.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product11->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product11->name_slug . '/',
                'filename' => $product11->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product11->name_slug . '/',
                'filename' => $product11->name_slug . '_2.jpg'
            ]
        ]);

        $product11->categories()->attach([
            Category::where('name', 'Cupboards')->first()->id,
            Category::where('name', 'Book Cases')->first()->id,
        ]);

        // ---

        $product12 = Product::create([
            'product_code' => 'BU0321 0401 0001',
            'name' => 'Tappeto Piccolo',
            'name_slug' => 'carpet-moderate-1',
            'details' => 'Length: 609.6mm(2\') Width: 304.8mm(1\')',
            'description' => 'Suitable for homes.',
            'quality_id' => 2,
            'product_rating' => 5
        ]);

        $product12->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Black',
                'color_hex' => '#000000'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Grey',
                'color_hex' => '#808080'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Light Grey',
                'color_hex' => '#d3d3d3'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Ruby Red',
                'color_hex' => '#9b111e'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Red',
                'color_hex' => '#ff0000'
            ],
        ]);

        $product12->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product12->name_slug . '/',
                'filename' => $product12->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product12->name_slug . '/',
                'filename' => $product12->name_slug . '_2.jpg'
            ]
        ]);

        $product12->categories()->attach([
            Category::where('name', 'Carpets')->first()->id,
            Category::where('name', 'House')->first()->id,
        ]);

        // ---

        $product13 = Product::create([
            'product_code' => 'BU0321 0401 0002',
            'name' => 'Tappeto Medio',
            'name_slug' => 'carpet-moderate-1',
            'details' => 'Length: 914.4mm(3\') Width: 609.6mm(2\')',
            'description' => 'Suitable for homes.',
            'quality_id' => 2,
            'product_rating' => 5
        ]);

        $product13->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Black',
                'color_hex' => '#000000'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Grey',
                'color_hex' => '#808080'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Light Grey',
                'color_hex' => '#d3d3d3'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Ruby Red',
                'color_hex' => '#9b111e'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Red',
                'color_hex' => '#ff0000'
            ],
        ]);

        $product13->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product13->name_slug . '/',
                'filename' => $product13->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product13->name_slug . '/',
                'filename' => $product13->name_slug . '_2.jpg'
            ]
        ]);

        $product13->categories()->attach([
            Category::where('name', 'Carpets')->first()->id,
            Category::where('name', 'House')->first()->id,
        ]);

        // ---

        $product14 = Product::create([
            'product_code' => 'BU0321 0501 0001',
            'name' => 'Curtain Premium',
            'name_slug' => 'curtain-premium',
            'details' => 'plant and dragon pleat curtain, velvet cloth come with 1 pair of tie back and track.',
            'description' => 'Suitable for homes, office.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product14->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Grey',
                'color_hex' => '#808080'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Beige',
                'color_hex' => '#f5f5dc'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Red',
                'color_hex' => '#ff0000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '2 panel, width: 1219.2mm(4\') , height: 1828.8mm(6\')'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '3 panel, width: 1828.8mm(6\') , height: 1828.8mm(6\')'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '2 panel, width: 1828.8 - 2438.4mm(6\'-8\') , height: 2184.4mm(7\'2")'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '3 panel, width: 2743.2 - 3352.8mm(9\'-11\') , height: 2184.4mm(7\'2")'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '3 panel, width: 2743.2 - 3352.8mm(9\'-11\') , height: 2743.2mm(9\')'
            ],
        ]);

        $product14->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product14->name_slug . '/',
                'filename' => $product14->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product14->name_slug . '/',
                'filename' => $product14->name_slug . '_2.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product14->name_slug . '/',
                'filename' => $product14->name_slug . '_3.jpg'
            ]
        ]);

        $product14->categories()->attach([
            Category::where('name', 'Curtains')->first()->id,
        ]);


        // ---

        $product15 = Product::create([
            'product_code' => 'BU0321  1307 0001',
            'name' => 'ALES Anti-MosQ',
            'name_slug' => 'ales-anti-mosq',
            'details' => 'ALES Anti-MosA acts on the nervous system of mosquitoes (also other insects) by interfering with the neuron functions.',
            'description' => 'ALES Anti-MosA acts on the nervous system of mosquitoes (also other insects) by interfering with the neuron functions.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product15->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White 9102K',
                'color_hex' => '#ffffff'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Pebble White 10A01K',
                'color_hex' => '#f0e9da'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Butter Cream 7549K',
                'color_hex' => '#f0e6cf'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Camelia 6649K',
                'color_hex' => '#a85c61'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Orchid White 8578K',
                'color_hex' => '#f1ebd9'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product15->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product15->name_slug . '/',
                'filename' => $product15->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product15->name_slug . '/',
                'filename' => $product15->name_slug . '_2.jpg'
            ]
        ]);

        $product15->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product16 = Product::create([
            'product_code' => 'BU0321  1307 0002',
            'name' => 'ALES Shiquy',
            'name_slug' => 'ales-shiquy',
            'details' => 'ALES Shiquy is a water based paint with slaked lime as its main component.',
            'description' => 'ALES Shiquy is a water based paint with slaked lime as its main component.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product16->attributes()->createMany([
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product16->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product16->name_slug . '/',
                'filename' => $product16->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product16->name_slug . '/',
                'filename' => $product16->name_slug . '_2.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product16->name_slug . '/',
                'filename' => $product16->name_slug . '_3.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product16->name_slug . '/',
                'filename' => $product16->name_slug . '_4.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product16->name_slug . '/',
                'filename' => $product16->name_slug . '_5.jpg'
            ]
        ]);

        $product16->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product17 = Product::create([
            'product_code' => 'BU0321  1307 0003',
            'name' => 'ALES Weathercoat Hybrid',
            'name_slug' => 'ales-weathercoat-hybrid',
            'details' => 'ALES Weathercoat Hybrid is an acrylic, high performance, superior quality
            exterior-grade emulsion; that gives a lively coat that exceeds conventional
            acrylic emulsion finish.',
            'description' => 'ALES Weathercoat Hybrid is an acrylic, high performance, superior quality
            exterior-grade emulsion; that gives a lively coat that exceeds conventional
            acrylic emulsion finish.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product17->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White 9102',
                'color_hex' => '#ffffff'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Daylight 1107K',
                'color_hex' => '#f8e5dd'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Beige 08B17K',
                'color_hex' => '#f5f5dc'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Lychee 08B15K',
                'color_hex' => '#dc5349'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product17->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product17->name_slug . '/',
                'filename' => $product17->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product17->name_slug . '/',
                'filename' => $product17->name_slug . '_2.jpg'
            ]
        ]);

        $product17->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product18 = Product::create([
            'product_code' => 'BU0321  1307 0004',
            'name' => 'CROWN Emulsion',
            'name_slug' => 'crown-emulsion',
            'details' => 'CROWN Emulsion is a matt emulsion specially formulated for housing
            projects where economy is important. It smooth matt finish hides surface
            imperfections and avoid reflection of uneven plastered surfaces.',
            'description' => 'CROWN Emulsion is a matt emulsion specially formulated for housing
            projects where economy is important. It smooth matt finish hides surface
            imperfections and avoid reflection of uneven plastered surfaces.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product18->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White 9102',
                'color_hex' => '#ffffff'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Vanilla 6607',
                'color_hex' => '#f9edc9'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Cool White 10B15',
                'color_hex' => '#dbe9f4'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Cream 3040',
                'color_hex' => '#fffdd0'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Lychee 08B15',
                'color_hex' => '#dc5349'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product18->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product18->name_slug . '/',
                'filename' => $product18->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product18->name_slug . '/',
                'filename' => $product18->name_slug . '_2.jpg'
            ]
        ]);

        $product18->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product19 = Product::create([
            'product_code' => 'BU0321  1307 0005',
            'name' => 'CROWN Gloss',
            'name_slug' => 'crown-gloss',
            'details' => 'CROWN Gloss is a solvent based gloss finish specially formulated for
            housing project where economy is important. It is easy to apply and forms
            a smooth, tough paint film.',
            'description' => 'CROWN Gloss is a solvent based gloss finish specially formulated for
            housing project where economy is important. It is easy to apply and forms
            a smooth, tough paint film.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product19->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White 9102',
                'color_hex' => '#ffffff'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Papyrus 0028',
                'color_hex' => '#c99868'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Chablis 3164',
                'color_hex' => '#e0bd8e'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Genie 0032',
                'color_hex' => '#d6b9ae'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product19->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product19->name_slug . '/',
                'filename' => $product19->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product19->name_slug . '/',
                'filename' => $product19->name_slug . '_2.jpg'
            ]
        ]);

        $product19->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product20 = Product::create([
            'product_code' => 'BU0321  1307 0006',
            'name' => 'Goody Easy Clean',
            'name_slug' => 'goody-easy-clean',
            'details' => 'GOODY Easy Clean is a high grade emulsion that gives a bright, smooth and attractive mid sheen pearl finish for interior use.',
            'description' => 'GOODY Easy Clean is a high grade emulsion that gives a bright, smooth and attractive mid sheen pearl finish for interior use.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product20->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Coral Reel 9',
                'color_hex' => '#f97976'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White Sage 79',
                'color_hex' => '#d2d4c3'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product20->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product20->name_slug . '/',
                'filename' => $product20->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product20->name_slug . '/',
                'filename' => $product20->name_slug . '_2.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product20->name_slug . '/',
                'filename' => $product20->name_slug . '_3.jpg'
            ]
        ]);

        $product20->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product21 = Product::create([
            'product_code' => 'BU0321  1307 0007',
            'name' => 'Goody Matt Extra',
            'name_slug' => 'goody-matt-extra',
            'details' => 'GOODY Matt Extra is a durable emulsion with smooth matt finish, does not contain lead, mercury and heavy metals.',
            'description' => 'GOODY Matt Extra is a durable emulsion with smooth matt finish, does not contain lead, mercury and heavy metals.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product21->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Coral Reel 9',
                'color_hex' => '#f97976'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White Sage 79',
                'color_hex' => '#d2d4c3'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product21->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product21->name_slug . '/',
                'filename' => $product21->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product21->name_slug . '/',
                'filename' => $product21->name_slug . '_2.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product21->name_slug . '/',
                'filename' => $product21->name_slug . '_3.jpg'
            ]
        ]);

        $product21->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product22 = Product::create([
            'product_code' => 'BU0321  1307 0008',
            'name' => 'Goody Weather Top',
            'name_slug' => 'goody-weather-top',
            'details' => 'GOODY Weather Top is an exterior wall emulsion that gives a tough water
            repellent finish when dry.',
            'description' => 'GOODY Weather Top is an exterior wall emulsion that gives a tough water
            repellent finish when dry.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product22->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Coral Reel 9',
                'color_hex' => '#f97976'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White Sage 79',
                'color_hex' => '#d2d4c3'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product22->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product22->name_slug . '/',
                'filename' => $product22->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product22->name_slug . '/',
                'filename' => $product22->name_slug . '_2.jpg'
            ]
        ]);

        $product22->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product23 = Product::create([
            'product_code' => 'BU0321  1307 0009',
            'name' => 'Par Silk',
            'name_slug' => 'par-silk',
            'details' => 'PAR Silk is a premium grade emulsion that gives a brilliant, smooth and
            luxurious silk finish for interior use.',
            'description' => 'PAR Silk is a premium grade emulsion that gives a brilliant, smooth and
            luxurious silk finish for interior use.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product23->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White 9102',
                'color_hex' => '#ffffff'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Camelia 6649K',
                'color_hex' => '#a85c61'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Lychee 08B15K',
                'color_hex' => '#dc5349'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product23->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product23->name_slug . '/',
                'filename' => $product23->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product23->name_slug . '/',
                'filename' => $product23->name_slug . '_2.jpg'
            ],
            [
                'path' => 'uploads/images/products/' . $product23->name_slug . '/',
                'filename' => $product23->name_slug . '_3.jpg'
            ]
        ]);

        $product23->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product23 = Product::create([
            'product_code' => 'BU0321  1307 0010',
            'name' => 'Par Supergloss',
            'name_slug' => 'par-supergloss',
            'details' => 'PAR Supergloss is a premium grade, high performance enamel suitable for
            use on all types of wood and metal. PAR Supergloss gives a tough, mirrorlike high gloss finish.',
            'description' => 'PAR Supergloss is a premium grade, high performance enamel suitable for
            use on all types of wood and metal. PAR Supergloss gives a tough, mirrorlike high gloss finish.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product23->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White 9102',
                'color_hex' => '#ffffff'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Vanilla White 6607K',
                'color_hex' => '#a85c61'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Lychee 08B15K',
                'color_hex' => '#dc5349'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ]
        ]);

        $product23->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product23->name_slug . '/',
                'filename' => $product23->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product23->name_slug . '/',
                'filename' => $product23->name_slug . '_2.jpg'
            ]
        ]);

        $product23->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product24 = Product::create([
            'product_code' => 'BU0321  1307 0011',
            'name' => 'Par Supermatt',
            'name_slug' => 'par-supermatt',
            'details' => 'PAR Supermatt is a premium quality, highly durable, anti-bacterial matt
            emulsion that gives a brilliant, smooth and rich matt finish. Its reduced
            shine avoids visible reflection of uneven plastered surfaces.',
            'description' => 'PAR Supermatt is a premium quality, highly durable, anti-bacterial matt
            emulsion that gives a brilliant, smooth and rich matt finish. Its reduced
            shine avoids visible reflection of uneven plastered surfaces.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product24->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White 9102',
                'color_hex' => '#ffffff'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Lily White 8567K',
                'color_hex' => '#e9eeeb'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Lychee 08B15K',
                'color_hex' => '#dc5349'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product24->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product24->name_slug . '/',
                'filename' => $product24->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product24->name_slug . '/',
                'filename' => $product24->name_slug . '_2.jpg'
            ]
        ]);

        $product24->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product25 = Product::create([
            'product_code' => 'BU0321  1307 0012',
            'name' => 'Par Timbercote',
            'name_slug' => 'par-timbercote',
            'details' => 'PAR Timbercote is a premium grade, translucent pigmented varnish which
            brings out the natural beauty of the grain of timber. It contains special
            preservatives to protect exterior timber surfaces against rot and mould
            growth.',
            'description' => 'PAR Timbercote is a premium grade, translucent pigmented varnish which
            brings out the natural beauty of the grain of timber. It contains special
            preservatives to protect exterior timber surfaces against rot and mould
            growth.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product25->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Golden Pine 103K',
                'color_hex' => '#8d6f2f'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Rust 105K',
                'color_hex' => '#b7410e'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Rosewood 108K',
                'color_hex' => '#65000b'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Redwood 107K',
                'color_hex' => '#a45a52'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Mahogany 102K',
                'color_hex' => '#c04000'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Teak 104K',
                'color_hex' => '#c29467'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Meranti 101K',
                'color_hex' => '#6b342a'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Charcoal 110K',
                'color_hex' => '#36454f'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product25->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product25->name_slug . '/',
                'filename' => $product25->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product25->name_slug . '/',
                'filename' => $product25->name_slug . '_2.jpg'
            ]
        ]);

        $product25->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product26 = Product::create([
            'product_code' => 'BU0321  1307 0013',
            'name' => 'Par Weathercoat',
            'name_slug' => 'par-weathercoat',
            'details' => 'PAR Weathercoat is a pure acrylic paint, high performance, superior quality
            exterior grade emulsion that gives a brilliant smooth and ultra-luxurious
            finish.',
            'description' => 'PAR Weathercoat is a pure acrylic paint, high performance, superior quality
            exterior grade emulsion that gives a brilliant smooth and ultra-luxurious
            finish.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product26->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Daylight 1107K',
                'color_hex' => '#f8e5dd'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'White 9102',
                'color_hex' => '#ffffff'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Lychee 08B15K',
                'color_hex' => '#dc5349'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product26->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product26->name_slug . '/',
                'filename' => $product26->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product26->name_slug . '/',
                'filename' => $product26->name_slug . '_2.jpg'
            ]
        ]);

        $product26->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product27 = Product::create([
            'product_code' => 'BU0321  1307 0014',
            'name' => 'Par Roofcote',
            'name_slug' => 'par-roofcote',
            'details' => 'PAR Roofcote is a premium grade coating designed to restore weathered
            concrete roof to look new again. It’s tough and durable finish gives long
            lasting protection against the tropical climate.',
            'description' => 'PAR Roofcote is a premium grade coating designed to restore weathered
            concrete roof to look new again. It’s tough and durable finish gives long
            lasting protection against the tropical climate.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product27->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Idaman Grey DRC 2044',
                'color_hex' => '#b6afac'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Casa Blue DRC 2041',
                'color_hex' => '#cdd0e7'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Texas Brown DRC 5779',
                'color_hex' => '#584734'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product27->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product27->name_slug . '/',
                'filename' => $product27->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product27->name_slug . '/',
                'filename' => $product27->name_slug . '_2.jpg'
            ]
        ]);

        $product27->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);

        // ---

        $product28 = Product::create([
            'product_code' => 'BU0321  1307 0015',
            'name' => 'Par Heat Reduction Roofcote',
            'name_slug' => 'par-heat-reduction-rootcote',
            'details' => 'PAR Heat Reduction Roofcote is a high performance coating designed to reflect heat and prevent heat build-up on your roofs.',
            'description' => 'PAR Heat Reduction Roofcote is a high performance coating designed to reflect heat and prevent heat build-up on your roofs.',
            'quality_id' => 3,
            'product_rating' => 5
        ]);

        $product28->attributes()->createMany([
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Chimney Grey DRC 1129HR',
                'color_hex' => '#b6afac'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Sailor Blue DRC 2763HR',
                'color_hex' => '#cdd0e7'
            ],
            [
                'attribute_type' => 'color',
                'attribute_name' => 'Organic Charcoal DRC 5866 HR',
                'color_hex' => '#584734'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter'
            ]
        ]);

        $product28->images()->createMany([
            [
                'path' => 'uploads/images/products/' . $product28->name_slug . '/',
                'filename' => $product28->name_slug . '_1.jpg',
                'default' => 1
            ],
            [
                'path' => 'uploads/images/products/' . $product28->name_slug . '/',
                'filename' => $product28->name_slug . '_2.jpg'
            ]
        ]);

        $product28->categories()->attach([
            Category::where('name', 'Paints')->first()->id,
            Category::where('name', 'Products & Services')->first()->id,
        ]);
    }
}
