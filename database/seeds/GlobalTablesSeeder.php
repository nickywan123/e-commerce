<?php

use App\Models\Globals\Color;
use App\Models\Globals\Dimension;
use App\Models\Globals\Employment;
use App\Models\Globals\Gender;
use App\Models\Globals\Length;
use App\Models\Globals\Marital;
use App\Models\Globals\Race;
use App\Models\Globals\State;
use App\Models\Globals\Status;
use Illuminate\Database\Seeder;

class GlobalTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Colors
         */
        // Color::create([
        //     'name' => 'black',
        //     'color_hex' => '#000000'
        // ]);

        // Color::create([
        //     'name' => 'white',
        //     'color_hex' => '#ffffff'
        // ]);

        // /**
        //  * Dimensions
        //  */
        // Dimension::create([
        //     'width' => '100',
        //     'height' => '100',
        //     'depth' => '50',
        //     'measurement_unit' => 'cm'
        // ]);

        // Dimension::create([
        //     'width' => '200',
        //     'height' => '150',
        //     'depth' => '30',
        //     'measurement_unit' => 'cm'
        // ]);

        /**
         * Employments
         */
        Employment::create([
            'name' => 'self-employed',
            'description' => 'self employed'
        ]);

        Employment::create([
            'name' => 'employed',
            'description' => 'employed'
        ]);

        /**
         * Genders
         */
        Gender::create([
            'name' => 'male',
            'description' => 'male'
        ]);

        Gender::create([
            'name' => 'female',
            'description' => 'female'
        ]);

        /**
         * Lengths
         */
        // Length::create([
        //     'length' => '100',
        //     'measurement_unit' => 'cm'
        // ]);

        // Length::create([
        //     'length' => '200',
        //     'measurement_unit' => 'cm'
        // ]);

        /**
         * Maritals
         * 
         */
        Marital::create([
            'name' => 'single',
            'description' => 'single'
        ]);

        Marital::create([
            'name' => 'married',
            'description' => 'married'
        ]);

        Marital::create([
            'name' => 'divorce',
            'description' => 'divorce'
        ]);

        /**
         * Races
         */
        Race::create([
            'name' => 'chinese',
            'description' => 'chinese'
        ]);

        Race::create([
            'name' => 'malay',
            'description' => 'malay'
        ]);

        Race::create([
            'name' => 'indian',
            'description' => 'indian'
        ]);

        /**
         * States
         */
        State::create([
            'name' => 'Johor',
            'description' => 'Johor',
            'abbreviation' => 'JHR',
            'iso_code' => 'MY-01',
        ]);

        State::create([
            'name' => 'Kedah',
            'description' => 'Kedah',
            'abbreviation' => 'KDH',
            'iso_code' => 'MY-02',
        ]);

        State::create([
            'name' => 'Kelantan',
            'description' => 'Kelantan',
            'abbreviation' => 'KTN',
            'iso_code' => 'MY-03',
        ]);

        State::create([
            'name' => 'Melaka',
            'description' => 'Melaka',
            'abbreviation' => 'MLK',
            'iso_code' => 'MY-04',
        ]);

        State::create([
            'name' => 'Negeri Sembilan',
            'description' => 'Negeri Sembilan',
            'abbreviation' => 'NSN',
            'iso_code' => 'MY-05',
        ]);

        State::create([
            'name' => 'Pahang',
            'description' => 'Pahang',
            'abbreviation' => 'PHG',
            'iso_code' => 'MY-06',
        ]);

        State::create([
            'name' => 'Penang',
            'description' => 'Penang',
            'abbreviation' => 'PNG',
            'iso_code' => 'MY-07',
        ]);

        State::create([
            'name' => 'Perak',
            'description' => 'Perak',
            'abbreviation' => 'PRK',
            'iso_code' => 'MY-08',
        ]);

        State::create([
            'name' => 'Perlis',
            'description' => 'Perlis',
            'abbreviation' => 'PLS',
            'iso_code' => 'MY-09',
        ]);

        State::create([
            'name' => 'Sabah',
            'description' => 'Sabah',
            'abbreviation' => 'SBH',
            'iso_code' => 'MY-12',
        ]);

        State::create([
            'name' => 'Sarawak',
            'description' => 'Sarawak',
            'abbreviation' => 'SWK',
            'iso_code' => 'MY-13',
        ]);

        State::create([
            'name' => 'Selangor',
            'description' => 'Selangor',
            'abbreviation' => 'SGR',
            'iso_code' => 'MY-10',
        ]);

        State::create([
            'name' => 'Terengganu',
            'description' => 'Terengganu',
            'abbreviation' => 'TRG',
            'iso_code' => 'MY-11',
        ]);

        State::create([
            'name' => 'W.P Kuala Lumpur',
            'description' => 'W.P Kuala Lumpur',
            'abbreviation' => 'KUL',
            'iso_code' => 'MY-14',
        ]);

        State::create([
            'name' => 'W.P Labuan',
            'description' => 'W.P Labuan',
            'abbreviation' => 'LBN',
            'iso_code' => 'MY-15',
        ]);

        State::create([
            'name' => 'W.P Putrajaya',
            'description' => 'W.P Putrajaya',
            'abbreviation' => 'PJY',
            'iso_code' => 'MY-16',
        ]);

        /**
         * Statutes
         */
        Status::create([
            'id' => 1001,
            'name' => 'Order Placed',
            'description' => 'Status for order status.'
        ]);

        Status::create([
            'id' => 1002,
            'name' => 'Order Shipped',
            'description' => 'Status for order status.'
        ]);

        Status::create([
            'id' => 1003,
            'name' => 'Order Delivered',
            'description' => 'Status for order status.'
        ]);

        Status::create([
            'id' => 2001,
            'name' => 'Active',
            'description' => 'Status for cart item status.'
        ]);

        Status::create([
            'id' => 2002,
            'name' => 'Removed',
            'description' => 'Status for cart item status.'
        ]);

        Status::create([
            'id' => 2003,
            'name' => 'Item Checked Out',
            'description' => 'Status for cart item status.'
        ]);
    }
}
