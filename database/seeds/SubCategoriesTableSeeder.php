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
            'url' => 'electrical.jpg'
        ]);

        SubCategory::create([
            'name' => 'lamp',
            'slug' => 'lamp',
            'parent_category_id' => '1'
        ])->image()->create([
            'url' => 'lamp.jpg'
        ]);

        SubCategory::create([
            'name' => 'lighting',
            'slug' => 'lighting',
            'parent_category_id' => '1'
        ])->image()->create([
            'url' => 'lighting.jpg'
        ]);

        SubCategory::create([
            'name' => 'plaster ceilling',
            'slug' => 'plaster-ceilling',
            'parent_category_id' => '2'
        ])->image()->create([
            'url' => 'plaster-ceiling.jpg'
        ]);

        SubCategory::create([
            'name' => 'cabinet',
            'slug' => 'cabinet',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'build-in-cabinets.jpg'
        ]);

        SubCategory::create([
            'name' => 'sofa',
            'slug' => 'sofa',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'sofa.jpg'
        ]);

        SubCategory::create([
            'name' => 'dining set',
            'slug' => 'dining-set',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'dining-set.jpg'
        ]);

        SubCategory::create([
            'name' => 'curtain / bedsheet',
            'slug' => 'curtain-bedsheet',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'curtain.jpg'
        ]);

        SubCategory::create([
            'name' => 'clock',
            'slug' => 'clock',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'clock.jpg'
        ]);

        SubCategory::create([
            'name' => 'wallpaper',
            'slug' => 'wallpaper',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'wallpaper.jpg'
        ]);

        SubCategory::create([
            'name' => 'carpet',
            'slug' => 'carpet',
            'parent_category_id' => '3'
        ])->image()->create([
            'url' => 'carpet.jpg'
        ]);

        SubCategory::create([
            'name' => 'gate',
            'slug' => 'gate',
            'parent_category_id' => '4'
        ])->image()->create([
            'url' => 'gate.jpg'
        ]);

        SubCategory::create([
            'name' => 'paint',
            'slug' => 'paint',
            'parent_category_id' => '5'
        ])->image()->create([
            'url' => 'paint.jpg'
        ]);
    }
}
