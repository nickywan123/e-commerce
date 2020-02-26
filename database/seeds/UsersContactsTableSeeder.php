<?php

use Illuminate\Database\Seeder;

class UsersContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\UserContact::create([

            'user_id' => '91856',
            'mobile_num' => '082198888',
            'emergency_num'=> '0199772121'

        ]);

        App\Models\UserContact::create([

            'user_id' => '46736',
            'mobile_num' => '682328888',
            'emergency_num'=> '074272121'

        ]);


        App\Models\UserContact::create([

            'user_id' => '77736',
            'mobile_num' => '3686828',
            'emergency_num'=> '1247121'

        ]);
    }
}
