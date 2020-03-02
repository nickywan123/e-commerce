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
        App\Models\Users\UserContact::create([

            'user_id' => '23',
            'mobile_num' => '082198888',
            'emergency_num' => '0199772121'

        ]);

        App\Models\Users\UserContact::create([

            'user_id' => '30',
            'mobile_num' => '682328888',
            'emergency_num' => '074272121'

        ]);


        App\Models\Users\UserContact::create([

            'user_id' => '40',
            'mobile_num' => '3686828',
            'emergency_num' => '1247121'

        ]);
    }
}
