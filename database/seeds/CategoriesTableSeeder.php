<?php

use Illuminate\Database\Seeder;

use App\Models\Categories\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'electrical',
            'slug' => 'electrical'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        Category::create([
            'name' => 'construction',
            'slug' => 'construction'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        Category::create([
            'name' => 'interior design',
            'slug' => 'interior-design'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        Category::create([
            'name' => 'ironworks',
            'slug' => 'ironworks'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);

        Category::create([
            'name' => 'external works',
            'slug' => 'external-works'
        ])->image()->create([
            'url' => 'https://via.placeholder.com/512'
        ]);
    }
}
