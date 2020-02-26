<?php

use Illuminate\Database\Seeder;

use App\Models\Categories\SubCategory;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'name' => 'wiring',
            'slug' => 'wiring',
            'parent_category_id' => '1'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        SubCategory::create([
            'name' => 'lamp',
            'slug' => 'lamp',
            'parent_category_id' => '1'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        SubCategory::create([
            'name' => 'lighting',
            'slug' => 'lighting',
            'parent_category_id' => '1'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        SubCategory::create([
            'name' => 'plaster ceilling',
            'slug' => 'plaster-ceilling',
            'parent_category_id' => '2'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        SubCategory::create([
            'name' => 'cabinet',
            'slug' => 'cabinet',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        SubCategory::create([
            'name' => 'sofa',
            'slug' => 'sofa',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        SubCategory::create([
            'name' => 'dining set',
            'slug' => 'dining-set',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        SubCategory::create([
            'name' => 'curtain / bedsheet',
            'slug' => 'curtain-bedsheet',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        SubCategory::create([
            'name' => 'clock',
            'slug' => 'clock',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        SubCategory::create([
            'name' => 'wallpaper',
            'slug' => 'wallpaper',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        SubCategory::create([
            'name' => 'carpet',
            'slug' => 'carpet',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        SubCategory::create([
            'name' => 'gate',
            'slug' => 'gate',
            'parent_category_id' => '4'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        SubCategory::create([
            'name' => 'paint',
            'slug' => 'paint',
            'parent_category_id' => '5'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);
    }
}
