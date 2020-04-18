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
            'name' => 'Cabinet - Storage Unit',
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
            'name' => 'Carpet Moderate 1',
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
            'name' => 'Carpet Moderate 2',
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
    }
}
