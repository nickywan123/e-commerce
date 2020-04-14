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
    }
}
