<?php

use Illuminate\Database\Seeder;
use App\Models\Categories\Quality;

class QualitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quality::create([
            'name' => 'Standard',
            'description' => 'Quality of a product.'
        ]);

        Quality::create([
            'name' => 'Moderate',
            'description' => 'Quality of a product.'
        ]);

        Quality::create([
            'name' => 'Premium',
            'description' => 'Quality of a product.'
        ]);
    }
}
