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
        // Product 1
        $panelProduct1 = new Product;
        $panelProduct1->global_product_id = 1;
        $panelProduct1->panel_account_id = 1918000101;
        $panelProduct1->product_description = '';
        $panelProduct1->product_material = '';
        $panelProduct1->product_consistency = '';
        $panelProduct1->product_package = '';
        $panelProduct1->price = 12000;
        $panelProduct1->member_price = 12000;
        $panelProduct1->delivery_fee = 0;
        $panelProduct1->product_rating = 0;
        $panelProduct1->save();

        $panelProduct1->attributes()->create([
            'panel_product_id' => $panelProduct1->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Cool White',
            'color_hex' => null
        ]);

        $panelProduct1->attributes()->create([
            'panel_product_id' => $panelProduct1->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Warm White',
            'color_hex' => null
        ]);

        $panelProduct1->attributes()->create([
            'panel_product_id' => $panelProduct1->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Yellow',
            'color_hex' => null
        ]);

        $panelProduct1->availableIn()->attach([
            '1',
            '2',
            '3',
            '4',
            '5'
        ]);

        // Product 1.2
        $panelProduct1 = new Product;
        $panelProduct1->global_product_id = 1;
        $panelProduct1->panel_account_id = 1918000103;
        $panelProduct1->product_description = '';
        $panelProduct1->product_material = '';
        $panelProduct1->product_consistency = '';
        $panelProduct1->product_package = '';
        $panelProduct1->price = 12000;
        $panelProduct1->member_price = 12000;
        $panelProduct1->delivery_fee = 0;
        $panelProduct1->product_rating = 0;
        $panelProduct1->save();

        $panelProduct1->attributes()->create([
            'panel_product_id' => $panelProduct1->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Cool White',
            'color_hex' => null
        ]);

        $panelProduct1->attributes()->create([
            'panel_product_id' => $panelProduct1->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Warm White',
            'color_hex' => null
        ]);

        $panelProduct1->attributes()->create([
            'panel_product_id' => $panelProduct1->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Yellow',
            'color_hex' => null
        ]);

        $panelProduct1->availableIn()->attach([
            '15',
            '13',
            '12',
            '5',
            '1'
        ]);

        // Product 2
        $panelProduct2 = new Product;
        $panelProduct2->global_product_id = 2;
        $panelProduct2->panel_account_id = 1918000101;
        $panelProduct2->product_description = '';
        $panelProduct2->product_material = '';
        $panelProduct2->product_consistency = '';
        $panelProduct2->product_package = '';
        $panelProduct2->price = 12000;
        $panelProduct2->member_price = 12000;
        $panelProduct2->delivery_fee = 0;
        $panelProduct2->product_rating = 0;
        $panelProduct2->save();

        $panelProduct2->attributes()->create([
            'panel_product_id' => $panelProduct2->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Cool White',
            'color_hex' => null
        ]);

        $panelProduct2->attributes()->create([
            'panel_product_id' => $panelProduct2->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Warm White',
            'color_hex' => null
        ]);

        $panelProduct2->attributes()->create([
            'panel_product_id' => $panelProduct2->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Yellow',
            'color_hex' => null
        ]);

        $panelProduct2->availableIn()->attach([
            '5',
            '10',
            '9',
            '4',
            '7'
        ]);

        // Product 2.2
        $panelProduct2 = new Product;
        $panelProduct2->global_product_id = 2;
        $panelProduct2->panel_account_id = 1918000103;
        $panelProduct2->product_description = '';
        $panelProduct2->product_material = '';
        $panelProduct2->product_consistency = '';
        $panelProduct2->product_package = '';
        $panelProduct2->price = 12000;
        $panelProduct2->member_price = 12000;
        $panelProduct2->delivery_fee = 0;
        $panelProduct2->product_rating = 0;
        $panelProduct2->save();

        $panelProduct2->attributes()->create([
            'panel_product_id' => $panelProduct2->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Cool White',
            'color_hex' => null
        ]);

        $panelProduct2->attributes()->create([
            'panel_product_id' => $panelProduct2->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Warm White',
            'color_hex' => null
        ]);

        $panelProduct2->attributes()->create([
            'panel_product_id' => $panelProduct2->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Yellow',
            'color_hex' => null
        ]);

        $panelProduct2->availableIn()->attach([
            '12',
            '14',
            '16',
            '13',
            '1'
        ]);

        // Product 3
        $panelProduct3 = new Product;
        $panelProduct3->global_product_id = 3;
        $panelProduct3->panel_account_id = 1918000101;
        $panelProduct3->product_description = '';
        $panelProduct3->product_material = '';
        $panelProduct3->product_consistency = '';
        $panelProduct3->product_package = '';
        $panelProduct3->price = 12000;
        $panelProduct3->member_price = 12000;
        $panelProduct3->delivery_fee = 0;
        $panelProduct3->product_rating = 0;
        $panelProduct3->save();

        $panelProduct3->attributes()->create([
            'panel_product_id' => $panelProduct3->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Cool White',
            'color_hex' => null
        ]);

        $panelProduct3->attributes()->create([
            'panel_product_id' => $panelProduct3->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Warm White',
            'color_hex' => null
        ]);

        $panelProduct3->attributes()->create([
            'panel_product_id' => $panelProduct3->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Yellow',
            'color_hex' => null
        ]);

        $panelProduct3->availableIn()->attach([
            '10',
            '11',
            '9',
            '2',
            '4'
        ]);

        // Product 4
        $panelProduct4 = new Product;
        $panelProduct4->global_product_id = 4;
        $panelProduct4->panel_account_id = 1918000101;
        $panelProduct4->product_description = '';
        $panelProduct4->product_material = '';
        $panelProduct4->product_consistency = '';
        $panelProduct4->product_package = '';
        $panelProduct4->price = 12000;
        $panelProduct4->member_price = 12000;
        $panelProduct4->delivery_fee = 0;
        $panelProduct4->product_rating = 0;
        $panelProduct4->save();

        $panelProduct4->attributes()->create([
            'panel_product_id' => $panelProduct4->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Cool White',
            'color_hex' => null
        ]);

        $panelProduct4->attributes()->create([
            'panel_product_id' => $panelProduct4->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Warm White',
            'color_hex' => null
        ]);

        $panelProduct4->attributes()->create([
            'panel_product_id' => $panelProduct4->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Yellow',
            'color_hex' => null
        ]);

        $panelProduct4->availableIn()->attach([
            '13',
            '4',
            '5',
            '6',
            '10'
        ]);

        // Product 5
        $panelProduct5 = new Product;
        $panelProduct5->global_product_id = 5;
        $panelProduct5->panel_account_id = 1918000101;
        $panelProduct5->product_description = '';
        $panelProduct5->product_material = '';
        $panelProduct5->product_consistency = '';
        $panelProduct5->product_package = '';
        $panelProduct5->price = 12000;
        $panelProduct5->member_price = 12000;
        $panelProduct5->delivery_fee = 0;
        $panelProduct5->product_rating = 0;
        $panelProduct5->save();

        $panelProduct5->attributes()->create([
            'panel_product_id' => $panelProduct5->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Cool White',
            'color_hex' => null
        ]);

        $panelProduct5->attributes()->create([
            'panel_product_id' => $panelProduct5->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Warm White',
            'color_hex' => null
        ]);

        $panelProduct5->attributes()->create([
            'panel_product_id' => $panelProduct5->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Yellow',
            'color_hex' => null
        ]);

        $panelProduct5->availableIn()->attach([
            '12',
            '14',
            '16',
            '13',
            '1'
        ]);

        // Product 6
        $panelProduct6 = new Product;
        $panelProduct6->global_product_id = 6;
        $panelProduct6->panel_account_id = 1918000101;
        $panelProduct6->product_description = '';
        $panelProduct6->product_material = '';
        $panelProduct6->product_consistency = '';
        $panelProduct6->product_package = '';
        $panelProduct6->price = 12000;
        $panelProduct6->member_price = 12000;
        $panelProduct6->delivery_fee = 0;
        $panelProduct6->product_rating = 0;
        $panelProduct6->save();

        $panelProduct6->attributes()->create([
            'panel_product_id' => $panelProduct6->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Cool White',
            'color_hex' => null
        ]);

        $panelProduct6->attributes()->create([
            'panel_product_id' => $panelProduct6->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Warm White',
            'color_hex' => null
        ]);

        $panelProduct6->attributes()->create([
            'panel_product_id' => $panelProduct6->id,
            'attribute_type' => 'light-temperature',
            'attribute_name' => 'Yellow',
            'color_hex' => null
        ]);

        $panelProduct6->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 7
        $panelProduct7 = new Product;
        $panelProduct7->global_product_id = 9;
        $panelProduct7->panel_account_id = 1918000104;
        $panelProduct7->product_description = '';
        $panelProduct7->product_material = '';
        $panelProduct7->product_consistency = '';
        $panelProduct7->product_package = '';
        $panelProduct7->price = 35900;
        $panelProduct7->member_price = 35900;
        $panelProduct7->delivery_fee = 0;
        $panelProduct7->product_rating = 5;
        $panelProduct7->save();

        $panelProduct7->attributes()->createMany([
            [
                'attribute_type' => 'size',
                'attribute_name' => 'Single (91cm * 190cm)',
                'price' => 35900,
                'member_price' => 35900,
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => 'Queen (152cm * 190cm)',
                'price' => 45900,
                'member_price' => 45900,
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => 'King (183cm * 190cm)',
                'price' => 53900,
                'member_price' => 53900,
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

        $panelProduct7->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 8
        $panelProduct8 = new Product;
        $panelProduct8->global_product_id = 10;
        $panelProduct8->panel_account_id = 1918000104;
        $panelProduct8->product_description = '';
        $panelProduct8->product_material = '';
        $panelProduct8->product_consistency = '';
        $panelProduct8->product_package = '';
        $panelProduct8->price = 99900;
        $panelProduct8->member_price = 99900;
        $panelProduct8->delivery_fee = 0;
        $panelProduct8->product_rating = 5;
        $panelProduct8->save();

        $panelProduct8->attributes()->createMany([
            [
                'attribute_type' => 'size',
                'attribute_name' => 'Single (91cm * 190cm)',
                'price' => 99900,
                'member_price' => 99900,
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => 'Queen (152cm * 190cm)',
                'price' => 109900,
                'member_price' => 109900
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => 'King (183cm * 190cm)',
                'price' => 119900,
                'member_price' => 119900,
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

        $panelProduct8->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 9
        $panelProduct9 = new Product;
        $panelProduct9->global_product_id = 11;
        $panelProduct9->panel_account_id = 1918000104;
        $panelProduct9->product_description = '';
        $panelProduct9->product_material = '';
        $panelProduct9->product_consistency = '';
        $panelProduct9->product_package = '';
        $panelProduct9->price = 169900;
        $panelProduct9->member_price = 169900;
        $panelProduct9->delivery_fee = 0;
        $panelProduct9->product_rating = 5;
        $panelProduct9->save();

        $panelProduct9->attributes()->createMany([
            [
                'attribute_type' => 'size',
                'attribute_name' => 'Single (91cm * 190cm)',
                'price' => 169900,
                'member_price' => 169900
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => 'Queen (152cm * 190cm)',
                'price' => 189900,
                'member_price' => 189900
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => 'King (183cm * 190cm)',
                'price' => 219900,
                'member_price' => 219900,
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

        $panelProduct9->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 10
        $panelProduct10 = new Product;
        $panelProduct10->global_product_id = 12;
        $panelProduct10->panel_account_id = 1918000101;
        $panelProduct10->product_description = '';
        $panelProduct10->product_material = '';
        $panelProduct10->product_consistency = '';
        $panelProduct10->product_package = '';
        $panelProduct10->price = 139900;
        $panelProduct10->member_price = 139900;
        $panelProduct10->delivery_fee = 0;
        $panelProduct10->product_rating = 5;
        $panelProduct10->save();

        $panelProduct10->attributes()->createMany([
            [
                'attribute_type' => 'size',
                'attribute_name' => 'H: 1219.2mm * W: 457.2mm * Length:914.4mm. Color: White.',
            ]
        ]);

        $panelProduct10->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 11
        $panelProduct11 = new Product;
        $panelProduct11->global_product_id = 13;
        $panelProduct11->panel_account_id = 1918000101;
        $panelProduct11->product_description = '';
        $panelProduct11->product_material = '';
        $panelProduct11->product_consistency = '';
        $panelProduct11->product_package = '';
        $panelProduct11->price = 299900;
        $panelProduct11->member_price = 299900;
        $panelProduct11->delivery_fee = 0;
        $panelProduct11->product_rating = 5;
        $panelProduct11->save();

        $panelProduct11->attributes()->createMany([
            [
                'attribute_type' => 'size',
                'attribute_name' => 'H:1700mm * W: 400mm, L: 1200mm. Color Red with White',
            ]
        ]);

        $panelProduct11->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 12
        $panelProduct12 = new Product;
        $panelProduct12->global_product_id = 14;
        $panelProduct12->panel_account_id = 1918000101;
        $panelProduct12->product_description = '';
        $panelProduct12->product_material = '';
        $panelProduct12->product_consistency = '';
        $panelProduct12->product_package = '';
        $panelProduct12->price = 12000;
        $panelProduct12->member_price = 12000;
        $panelProduct12->delivery_fee = 0;
        $panelProduct12->product_rating = 5;
        $panelProduct12->save();

        $panelProduct12->attributes()->createMany([
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
            [
                'attribute_type' => 'size',
                'attribute_name' => '609.6mm(2\') * 304.8mm(1\')'
            ]
        ]);

        $panelProduct12->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 13
        $panelProduct13 = new Product;
        $panelProduct13->global_product_id = 15;
        $panelProduct13->panel_account_id = 1918000101;
        $panelProduct13->product_description = '';
        $panelProduct13->product_material = '';
        $panelProduct13->product_consistency = '';
        $panelProduct13->product_package = '';
        $panelProduct13->price = 12000;
        $panelProduct13->member_price = 12000;
        $panelProduct13->delivery_fee = 0;
        $panelProduct13->product_rating = 5;
        $panelProduct13->save();

        $panelProduct13->attributes()->createMany([
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
            [
                'attribute_type' => 'size',
                'attribute_name' => 'Length: 914.4mm(3\') Width: 609.6mm(2\')'
            ]
        ]);

        $panelProduct13->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 14
        $panelProduct14 = new Product;
        $panelProduct14->global_product_id = 16;
        $panelProduct14->panel_account_id = 1918000102;
        $panelProduct14->product_description = '';
        $panelProduct14->product_material = '';
        $panelProduct14->product_consistency = '';
        $panelProduct14->product_package = '';
        $panelProduct14->price = 145000;
        $panelProduct14->member_price = 145000;
        $panelProduct14->delivery_fee = 0;
        $panelProduct14->product_rating = 5;
        $panelProduct14->save();

        $panelProduct14->attributes()->createMany([
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
                'attribute_name' => '2 panel, width: 1219.2mm(4\') , height: 1828.8mm(6\')',
                'price' => 145000,
                'member_price' => 145000
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '3 panel, width: 1828.8mm(6\') , height: 1828.8mm(6\')',
                'price' => 165000,
                'member_price' => 165000
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '2 panel, width: 1828.8 - 2438.4mm(6\'-8\') , height: 2184.4mm(7\'2")',
                'price' => 185000,
                'member_price' => 185000
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '3 panel, width: 2743.2 - 3352.8mm(9\'-11\') , height: 2184.4mm(7\'2")',
                'price' => 235000,
                'member_price' => 235000
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '3 panel, width: 2743.2 - 3352.8mm(9\'-11\') , height: 2743.2mm(9\')',
                'price' => 245000,
                'member_price' => 245000
            ],
        ]);;

        $panelProduct14->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 15
        $panelProduct15 = new Product;
        $panelProduct15->global_product_id = 7;
        $panelProduct15->panel_account_id = 1918000102;
        $panelProduct15->product_description = '';
        $panelProduct15->product_material = '';
        $panelProduct15->product_consistency = '';
        $panelProduct15->product_package = '';
        $panelProduct15->price = 20000;
        $panelProduct15->member_price = 20000;
        $panelProduct15->delivery_fee = 0;
        $panelProduct15->product_rating = 3;
        $panelProduct15->save();

        $panelProduct15->attributes()->createMany([
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Cool White'
            ],
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Warm White'
            ]
        ]);

        $panelProduct15->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 16
        $panelProduct16 = new Product;
        $panelProduct16->global_product_id = 8;
        $panelProduct16->panel_account_id = 1918000102;
        $panelProduct16->product_description = '';
        $panelProduct16->product_material = '';
        $panelProduct16->product_consistency = '';
        $panelProduct16->product_package = '';
        $panelProduct16->price = 159900;
        $panelProduct16->member_price = 159900;
        $panelProduct16->delivery_fee = 0;
        $panelProduct16->product_rating = 5;
        $panelProduct16->save();

        $panelProduct16->attributes()->createMany([
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Cool White'
            ],
            [
                'attribute_type' => 'light-temperature',
                'attribute_name' => 'Warm White'
            ]
        ]);

        $panelProduct16->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 17
        $panelProduct17 = new Product;
        $panelProduct17->global_product_id = 17;
        $panelProduct17->panel_account_id = 1918000105;
        $panelProduct17->product_description = '
        ALES Anti-MosA acts on the nervous system of mosquitoes (also other insects) by interfering with the neuron functions.';
        $panelProduct17->product_material = '';
        $panelProduct17->product_consistency = '<p><ul><li>Mosquito-repellent properties.</li><li>waterbased interior paint.</li><li>sheen luxurious finish.</li><li>good washability.</li><li>enviromental friendly.</li><li>interior use.</li></ul></p>';
        $panelProduct17->product_package = '';
        $panelProduct17->price = 10000;
        $panelProduct17->member_price = 10000;
        $panelProduct17->delivery_fee = 0;
        $panelProduct17->product_rating = 5;
        $panelProduct17->save();

        $panelProduct17->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct17->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 18
        $panelProduct18 = new Product;
        $panelProduct18->global_product_id = 18;
        $panelProduct18->panel_account_id = 1918000105;
        $panelProduct18->product_description = 'ALES Shiquy is a water based paint with slaked lime as its main component.';
        $panelProduct18->product_material = '';
        $panelProduct18->product_consistency = '<p><ul><li>Excellent air purifying through CO² adsorption.</li><li>Excellent air detoxification for indoor air pollution.</li><li>Excellent odor eliminator.</li><li>Anti-bacteria property reduces E.coli, MRSA, Staphylococcus aureus
        and Pseudomonas aeruginosa effectively</li><li>Anti-virus property reduces Canine parvovirus, Influenza virus,
        Vesicular stomatitis virus Bovine popular stomatitis virus effectively.</li><li>Humidity control.</li><li>Non-flammable.</li><li>Low VOC</li></ul></p>';
        $panelProduct18->product_package = '';
        $panelProduct18->price = 10000;
        $panelProduct18->member_price = 10000;
        $panelProduct18->delivery_fee = 0;
        $panelProduct18->product_rating = 5;
        $panelProduct18->save();

        $panelProduct18->attributes()->createMany([
            [
                'attribute_type' => 'size',
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct18->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 19
        $panelProduct19 = new Product;
        $panelProduct19->global_product_id = 19;
        $panelProduct19->panel_account_id = 1918000105;
        $panelProduct19->product_description = 'ALES Weathercoat Hybrid is an acrylic, high performance, superior quality
        exterior-grade emulsion; that gives a lively coat that exceeds conventional
        acrylic emulsion finish.';
        $panelProduct19->product_material = '';
        $panelProduct19->product_consistency = '<p><ul><li>8 Years Performance Warranty.</li><li>Excellent fungal and algae growth resistance.</li><li>Excellent colour retention.</li><li>Tough synthetic finish - washable.</li><li>No added lead or mercury.</li><li>Humidity control.</li><li>Approved by SIRIM to Malaysian Standard MS 134:2007.</li></ul></p>';
        $panelProduct19->product_package = '';
        $panelProduct19->price = 10000;
        $panelProduct19->member_price = 10000;
        $panelProduct19->delivery_fee = 0;
        $panelProduct19->product_rating = 5;
        $panelProduct19->save();

        $panelProduct19->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct19->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 20
        $panelProduct20 = new Product;
        $panelProduct20->global_product_id = 20;
        $panelProduct20->panel_account_id = 1918000105;
        $panelProduct20->product_description = 'CROWN Emulsion is a matt emulsion specially formulated for housing
        projects where economy is important. It smooth matt finish hides surface
        imperfections and avoid reflection of uneven plastered surfaces.';
        $panelProduct20->product_material = '';
        $panelProduct20->product_consistency = '<p>
        <ul>
        <li>Economy – suitable for large-scale housing projects.</li>
        <li>Good adhesion property.</li>
        <li>Good hiding power.</li>
        <li>Easy to apply.</li>
        <li>Formaldehyde free.</li>
        <li>Wide colour range.</li>
        <li>No added lead or mercury.</li>
        <li>Low VOC and odour.</li>
        <li>Approved by SIRIM to Malaysian Standard MS 903:1984.</li>
        </ul>
        </p>';
        $panelProduct20->product_package = '';
        $panelProduct20->price = 10000;
        $panelProduct20->member_price = 10000;
        $panelProduct20->delivery_fee = 0;
        $panelProduct20->product_rating = 5;
        $panelProduct20->save();

        $panelProduct20->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct20->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 21
        $panelProduct21 = new Product;
        $panelProduct21->global_product_id = 21;
        $panelProduct21->panel_account_id = 1918000105;
        $panelProduct21->product_description = 'CROWN Gloss is a solvent based gloss finish specially formulated for
        housing project where economy is important. It is easy to apply and forms
        a smooth, tough paint film.';
        $panelProduct21->product_material = '';
        $panelProduct21->product_consistency = '<p>
        <ul>
        <li>Economy – suitable for large-scale housing projects.</li>
        <li>High gloss finish.</li>
        <li>Good hiding power.</li>
        <li>Good brush loading and good sag resistant.</li>
        <li>Quick hard drying – quick recoating.</li>
        </ul>
        </p>';
        $panelProduct21->product_package = '';
        $panelProduct21->price = 10000;
        $panelProduct21->member_price = 10000;
        $panelProduct21->delivery_fee = 0;
        $panelProduct21->product_rating = 5;
        $panelProduct21->save();

        $panelProduct21->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct21->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 22
        $panelProduct22 = new Product;
        $panelProduct22->global_product_id = 22;
        $panelProduct22->panel_account_id = 1918000105;
        $panelProduct22->product_description = 'GOODY Easy Clean is a high grade emulsion that gives a bright, smooth and attractive mid sheen pearl finish for interior use.';
        $panelProduct22->product_material = '';
        $panelProduct22->product_consistency = '<p>
        <ul>
        <li>Easy wipe up to 5,000 times.</li>
        <li>Bright, smooth, pearl finish.</li>
        <li>Withstand moderate washing.</li>
        <li>Dirty hand marks can be wiped clean.</li>
        <li>No added lead or mercury.</li>
        <li>Low VOC and odour.</li>
        </ul>
        </p>';
        $panelProduct22->product_package = '';
        $panelProduct22->price = 10000;
        $panelProduct22->member_price = 10000;
        $panelProduct22->delivery_fee = 0;
        $panelProduct22->product_rating = 5;
        $panelProduct22->save();

        $panelProduct22->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct22->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 23
        $panelProduct23 = new Product;
        $panelProduct23->global_product_id = 23;
        $panelProduct23->panel_account_id = 1918000105;
        $panelProduct23->product_description = 'GOODY Matt Extra is a durable emulsion with smooth matt finish, does not contain lead, mercury and heavy metals.';
        $panelProduct23->product_material = '';
        $panelProduct23->product_consistency = '<p>
        <ul>
        <li>With anti-mould property.</li>
        <li>Good whiteness.</li>
        <li>Good dry hiding property.</li>
        <li>Environmentally friendly product.</li>
        <li>No added lead or mercury.</li>
        <li>Low VOC and odour.</li>
        <li>Approved by SIRIM to Malaysian Standard MS 903:1984.</li>
        </ul>
        </p>';
        $panelProduct23->product_package = '';
        $panelProduct23->price = 10000;
        $panelProduct23->member_price = 10000;
        $panelProduct23->delivery_fee = 0;
        $panelProduct23->product_rating = 5;
        $panelProduct23->save();

        $panelProduct23->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct23->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 24
        $panelProduct24 = new Product;
        $panelProduct24->global_product_id = 24;
        $panelProduct24->panel_account_id = 1918000105;
        $panelProduct24->product_description = 'GOODY Weather Top is an exterior wall emulsion that gives a tough water
        repellent finish when dry.';
        $panelProduct24->product_material = '';
        $panelProduct24->product_consistency = '<p>
        <ul>
        <li>5 Years Performance Warranty.</li>
        <li>Good fungal and algae growth resistance.</li>
        <li>Good colour retention.</li>
        <li>Tough synthetic finish – washable.</li>
        <li>Good weathering property.</li>
        <li>Low VOC and odour.</li>
        <li>No added lead or mercury.</li>
        <li>Low VOC and odour.</li>
        <li>Approved by SIRIM to Malaysian Standard MS 134:200.</li>
        </ul>
        </p>';

        $panelProduct24->product_package = '';
        $panelProduct24->price = 10000;
        $panelProduct24->member_price = 10000;
        $panelProduct24->delivery_fee = 0;
        $panelProduct24->product_rating = 5;
        $panelProduct24->save();

        $panelProduct24->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct24->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 25
        $panelProduct25 = new Product;
        $panelProduct25->global_product_id = 25;
        $panelProduct25->panel_account_id = 1918000105;
        $panelProduct25->product_description = 'PAR Silk is a premium grade emulsion that gives a brilliant, smooth and
        luxurious silk finish for interior use.';
        $panelProduct25->product_material = '';
        $panelProduct25->product_consistency = '<p>
        <ul>
        <li>High durability.</li>
        <li>Withstand vigorous washing.</li>
        <li>Dirty hand marks can be wiped clean easily.</li>
        <li>Bright, smooth, luxurious finish.</li>
        <li>Excellent colour retention.</li>
        <li>Low VOC and odour.</li>
        <li>No added lead or mercury.</li>
        <li>No added lead or mercury.</li>
        </ul>
        </p>';
        $panelProduct25->product_package = '';
        $panelProduct25->price = 10000;
        $panelProduct25->member_price = 10000;
        $panelProduct25->delivery_fee = 0;
        $panelProduct25->product_rating = 5;
        $panelProduct25->save();

        $panelProduct25->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct25->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 26
        $panelProduct26 = new Product;
        $panelProduct26->global_product_id = 26;
        $panelProduct26->panel_account_id = 1918000105;
        $panelProduct26->product_description = 'PAR Supergloss is a premium grade, high performance enamel suitable for
        use on all types of wood and metal. PAR Supergloss gives a tough, mirrorlike high gloss finish.';
        $panelProduct26->product_material = '';
        $panelProduct26->product_consistency = '<p>
        <ul>
        <li>Brilliant gloss enamel.</li>
        <li>Outstanding weathering resistance.</li>
        <li>Excellent fungus resistance.</li>
        <li>Excellent hiding power.</li>
        <li>Excellent colour retention.</li>
        <li>Low VOC and odour.</li>
        <li>No added lead or mercury.</li>
        <li>Approved by SIRIM to Malaysian Standard MS 125:199.</li>
        </ul>
        </p>';
        $panelProduct26->product_package = '';
        $panelProduct26->price = 10000;
        $panelProduct26->member_price = 10000;
        $panelProduct26->delivery_fee = 0;
        $panelProduct26->product_rating = 5;
        $panelProduct26->save();

        $panelProduct26->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct26->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 27
        $panelProduct27 = new Product;
        $panelProduct27->global_product_id = 27;
        $panelProduct27->panel_account_id = 1918000105;
        $panelProduct27->product_description = 'PAR Supermatt is a premium quality, highly durable, anti-bacterial matt
        emulsion that gives a brilliant, smooth and rich matt finish. Its reduced
        shine avoids visible reflection of uneven plastered surfaces.';
        $panelProduct27->product_material = '';
        $panelProduct27->product_consistency = '<p>
        <ul>
        <li>Excellent anti-bacterial property.</li>
        <li>High durability.</li>
        <li>Excellent hiding power.</li>
        <li>Excellent hiding power.</li>
        <li>Excellent colour retention.</li>
        <li>Low VOC and odour.</li>
        <li>No added lead or mercury.</li>
        <li>Approved by SIRIM to Malaysian Standard MS 903:198.</li>
        </ul>
        </p>';
        $panelProduct27->product_package = '';
        $panelProduct27->price = 10000;
        $panelProduct27->member_price = 10000;
        $panelProduct27->delivery_fee = 0;
        $panelProduct27->product_rating = 5;
        $panelProduct27->save();

        $panelProduct27->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct27->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 28
        $panelProduct28 = new Product;
        $panelProduct28->global_product_id = 28;
        $panelProduct28->panel_account_id = 1918000105;
        $panelProduct28->product_description = 'PAR Timbercote is a premium grade, translucent pigmented varnish which
        brings out the natural beauty of the grain of timber. It contains special
        preservatives to protect exterior timber surfaces against rot and mould
        growth.';
        $panelProduct28->product_material = '';
        $panelProduct28->product_consistency = '<p>
        <ul>
        <li>Excellent resistance against wood rot and mould growth.</li>
        <li>Allow timber to breathe, thus will not blister or crack.</li>
        <li>Will filter out UV rays reducing degradation of timber.</li>
        <li>Excellent abrasion resistance.</li>
        <li>Excellent colour retention.</li>
        <li>Long lasting protection and water resistance.</li>
        </ul>
        </p>';
        $panelProduct28->product_package = '';
        $panelProduct28->price = 10000;
        $panelProduct28->member_price = 10000;
        $panelProduct28->delivery_fee = 0;
        $panelProduct28->product_rating = 5;
        $panelProduct28->save();

        $panelProduct28->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct28->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 29
        $panelProduct29 = new Product;
        $panelProduct29->global_product_id = 29;
        $panelProduct29->panel_account_id = 1918000105;
        $panelProduct29->product_description = 'PAR Weathercoat is a pure acrylic paint, high performance, superior quality
        exterior grade emulsion that gives a brilliant smooth and ultra-luxurious
        finish.';
        $panelProduct29->product_material = '';
        $panelProduct29->product_consistency = '<p>
        <ul>
        <li>6 Years Performance Warranty.</li>
        <li>Pure acrylic resins - outlast ordinary emulsion.</li>
        <li>Excellent fungal and algae growth resistance.</li>
        <li>Excellent colour retention.</li>
        <li>Tough synthetic finish - washable.</li>
        <li>No added lead or mercury.</li>
        <li>Low VOC and odour.</li>
        <li>Approved by SIRIM to Malaysian Standard MS 134:200.</li>
        </ul>
        </p>';
        $panelProduct29->product_package = '';
        $panelProduct29->price = 10000;
        $panelProduct29->member_price = 10000;
        $panelProduct29->delivery_fee = 0;
        $panelProduct29->product_rating = 5;
        $panelProduct29->save();

        $panelProduct29->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct29->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 30
        $panelProduct30 = new Product;
        $panelProduct30->global_product_id = 30;
        $panelProduct30->panel_account_id = 1918000105;
        $panelProduct30->product_description = 'PAR Roofcote is a premium grade coating designed to restore weathered
        concrete roof to look new again. It’s tough and durable finish gives long
        lasting protection against the tropical climate.';
        $panelProduct30->product_material = '';
        $panelProduct30->product_consistency = '<p>
        <ul>
        <li>Restores weathered tiles to their clean, bright & shiny state.</li>
        <li>Excellent fungal and algae growth resistant.</li>
        <li>Excellent fungal and algae growth resistance.</li>
        <li>Excellent colour retention.</li>
        <li>Tough synthetic finish - washable.</li>
        <li>No added lead or mercury.</li>
        </ul>
        </p>';
        $panelProduct30->product_package = '';
        $panelProduct30->price = 10000;
        $panelProduct30->member_price = 10000;
        $panelProduct30->delivery_fee = 0;
        $panelProduct30->product_rating = 5;
        $panelProduct30->save();

        $panelProduct30->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct30->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 31
        $panelProduct31 = new Product;
        $panelProduct31->global_product_id = 31;
        $panelProduct31->panel_account_id = 1918000105;
        $panelProduct31->product_description = 'PAR Heat Reduction Roofcote is a high performance coating designed to reflect heat and prevent heat build-up on your roofs.';
        $panelProduct31->product_material = '';
        $panelProduct31->product_consistency = '<p>
        <ul>
        <li>Excellent heat reduction property, up to 5˚C reduction.</li>
        <li>Excellent fungal and algae growth resistance.</li>
        <li>Excellent colour retention.</li>
        <li>Tough synthetic finish - washable.</li>
        <li>No added lead or mercury.</li>
        </ul>
        </p>';
        $panelProduct31->product_package = '';
        $panelProduct31->price = 10000;
        $panelProduct31->member_price = 10000;
        $panelProduct31->delivery_fee = 0;
        $panelProduct31->product_rating = 5;
        $panelProduct31->save();

        $panelProduct31->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '10000',
                'member_price' => '10000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '13000',
                'member_price' => '13000'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '16000',
                'member_price' => '16000'
            ]
        ]);

        $panelProduct31->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);

        // Product 32
        $panelProduct32 = new Product;
        $panelProduct32->global_product_id = 31;
        $panelProduct32->panel_account_id = 1918000101;
        $panelProduct32->product_description = 'PAR Heat Reduction Roofcote is a high performance coating designed to reflect heat and prevent heat build-up on your roofs.';
        $panelProduct32->product_material = '';
        $panelProduct32->product_consistency = '<p>
        <ul>
        <li>Excellent heat reduction property, up to 5˚C reduction.</li>
        <li>Excellent fungal and algae growth resistance.</li>
        <li>Excellent colour retention.</li>
        <li>Tough synthetic finish - washable.</li>
        <li>No added lead or mercury.</li>
        </ul>
        </p>';
        $panelProduct32->product_package = '';
        $panelProduct32->price = 100;
        $panelProduct32->member_price = 100;
        $panelProduct32->delivery_fee = 0;
        $panelProduct32->product_rating = 5;
        $panelProduct32->save();

        $panelProduct32->attributes()->createMany([
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
                'attribute_name' => '1 Liter',
                'price' => '100',
                'member_price' => '100'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '5 Liter',
                'price' => '100',
                'member_price' => '100'
            ],
            [
                'attribute_type' => 'size',
                'attribute_name' => '15 Liter',
                'price' => '100',
                'member_price' => '100'
            ]
        ]);

        $panelProduct32->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);
    }
}
