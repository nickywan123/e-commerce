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
        $panelProduct1->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct1->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct1->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct1->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct1->panel_account_id = 1918000003;
        $panelProduct1->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct1->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct1->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct1->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct2->panel_account_id = 1918000001;
        $panelProduct2->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct2->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct2->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct2->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct2->panel_account_id = 1918000003;
        $panelProduct2->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct2->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct2->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct2->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct3->panel_account_id = 1918000001;
        $panelProduct3->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct3->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct3->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct3->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct4->panel_account_id = 1918000001;
        $panelProduct4->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct4->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct4->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct4->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct5->panel_account_id = 1918000001;
        $panelProduct5->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct5->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct5->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct5->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct6->panel_account_id = 1918000001;
        $panelProduct6->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct6->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct6->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct6->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct7->panel_account_id = 1918000004;
        $panelProduct7->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct7->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct7->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct7->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct8->panel_account_id = 1918000004;
        $panelProduct8->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct8->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct8->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct8->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct9->panel_account_id = 1918000004;
        $panelProduct9->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct9->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct9->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct9->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct10->panel_account_id = 1918000001;
        $panelProduct10->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct10->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct10->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct10->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct11->panel_account_id = 1918000001;
        $panelProduct11->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct11->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct11->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct11->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct12->panel_account_id = 1918000001;
        $panelProduct12->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct12->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct12->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct12->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct13->panel_account_id = 1918000001;
        $panelProduct13->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct13->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct13->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct13->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct14->panel_account_id = 1918000002;
        $panelProduct14->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct14->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct14->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct14->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct15->panel_account_id = 1918000002;
        $panelProduct15->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct15->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct15->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct15->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
        $panelProduct16->panel_account_id = 1918000002;
        $panelProduct16->product_description = '
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, quod reiciendis explicabo exercitationem eius soluta nobis expedita ea voluptatum, ad unde error blanditiis dicta quos. Asperiores repellat, animi saepe quod deleniti vero ipsa veritatis, excepturi sed quisquam neque necessitatibus sint porro sequi rerum similique quas, illo suscipit hic! Quibusdam sequi exercitationem, laudantium et, tenetur nam sit neque aliquam animi cum voluptas corrupti eligendi quia velit deserunt culpa recusandae repellat deleniti enim! Reiciendis dolorem incidunt distinctio deserunt unde minus necessitatibus reprehenderit nisi praesentium excepturi iusto dignissimos veniam quibusdam consequuntur, architecto, saepe dolores, corporis eum porro illo? Laborum, quidem dolorum non ad dignissimos blanditiis porro. Quae vel doloribus doloremque explicabo, officia libero vitae eaque ab eligendi reprehenderit ratione neque eveniet perspiciatis dolorum tenetur fugiat expedita modi soluta quisquam. Fugit sunt voluptatem, totam, vitae repellat culpa minus, quis voluptates magnam corporis recusandae ipsa.</p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        <p><img src="https://loremflickr.com/640/360" alt="" width="640" height="360" /></p>
        ';
        $panelProduct16->product_material = 'Lorem ipsum, sit dolor, amet consectetur.';
        $panelProduct16->product_consistency = 'Lorem ipsum sit dolor amet consectetur.';
        $panelProduct16->product_package = 'Lorem ipsum sit dolor amet consectetur.';
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
    }
}
