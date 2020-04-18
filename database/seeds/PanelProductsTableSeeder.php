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
        $panelProduct1->panel_account_id = 1918000001;
        $panelProduct1->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct1->price = 12000;
        $panelProduct1->delivery_fee = 1000;
        $panelProduct1->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct1->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
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
        $panelProduct1->panel_account_id = 1918000003;
        $panelProduct1->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct1->price = 12000;
        $panelProduct1->delivery_fee = 1000;
        $panelProduct1->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct1->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
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
        $panelProduct2->panel_account_id = 1918000001;
        $panelProduct2->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct2->price = 12000;
        $panelProduct2->delivery_fee = 1000;
        $panelProduct2->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct2->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
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
        $panelProduct2->panel_account_id = 1918000003;
        $panelProduct2->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct2->price = 12000;
        $panelProduct2->delivery_fee = 1000;
        $panelProduct2->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct2->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
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
        $panelProduct3->panel_account_id = 1918000001;
        $panelProduct3->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct3->price = 12000;
        $panelProduct3->delivery_fee = 1000;
        $panelProduct3->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct3->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
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
        $panelProduct4->panel_account_id = 1918000001;
        $panelProduct4->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct4->price = 12000;
        $panelProduct4->delivery_fee = 1000;
        $panelProduct4->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct4->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
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
        $panelProduct5->panel_account_id = 1918000001;
        $panelProduct5->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct5->price = 12000;
        $panelProduct5->delivery_fee = 1000;
        $panelProduct5->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct5->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
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
        $panelProduct6->panel_account_id = 1918000001;
        $panelProduct6->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct6->price = 12000;
        $panelProduct6->delivery_fee = 1000;
        $panelProduct6->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct6->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
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
        $panelProduct7->panel_account_id = 1918000004;
        $panelProduct7->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct7->price = 35900;
        $panelProduct7->delivery_fee = 1000;
        $panelProduct7->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct7->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
        $panelProduct7->product_rating = 5;
        $panelProduct7->save();

        $panelProduct7->attributes()->createMany([
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
        $panelProduct8->panel_account_id = 1918000004;
        $panelProduct8->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct8->price = 99900;
        $panelProduct8->delivery_fee = 1000;
        $panelProduct8->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct8->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
        $panelProduct8->product_rating = 5;
        $panelProduct8->save();

        $panelProduct8->attributes()->createMany([
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
        $panelProduct9->panel_account_id = 1918000004;
        $panelProduct9->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct9->price = 169900;
        $panelProduct9->delivery_fee = 1000;
        $panelProduct9->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct9->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
        $panelProduct9->product_rating = 5;
        $panelProduct9->save();

        $panelProduct9->attributes()->createMany([
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
        $panelProduct10->panel_account_id = 1918000001;
        $panelProduct10->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct10->price = 139900;
        $panelProduct10->delivery_fee = 1000;
        $panelProduct10->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct10->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
        $panelProduct10->product_rating = 5;
        $panelProduct10->save();

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
        $panelProduct11->panel_account_id = 1918000001;
        $panelProduct11->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct11->price = 299900;
        $panelProduct11->delivery_fee = 1000;
        $panelProduct11->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct11->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
        $panelProduct11->product_rating = 5;
        $panelProduct11->save();

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
        $panelProduct12->panel_account_id = 1918000001;
        $panelProduct12->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct12->price = 12000;
        $panelProduct12->delivery_fee = 1000;
        $panelProduct12->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct12->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
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
        $panelProduct13->panel_account_id = 1918000001;
        $panelProduct13->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct13->price = 12000;
        $panelProduct13->delivery_fee = 1000;
        $panelProduct13->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct13->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
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
        $panelProduct14->panel_account_id = 1918000002;
        $panelProduct14->product_details = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct14->price = 145000;
        $panelProduct14->delivery_fee = 1000;
        $panelProduct14->panel_promotion = 'With 15 years experience in manufacturing and serving our customers, we can guarantee that this product will meet your needs and 100% satisfy you.';
        $panelProduct14->product_materials = 'Carbon fiber plastic, glass, LED, sand blasted plastic';
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
                'attribute_name' => 'Grey',
                'color_hex' => '#808080'
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
        ]);;

        $panelProduct14->availableIn()->attach([
            '10',
            '9',
            '7',
            '5',
            '6'
        ]);
    }
}
