<?php

use Illuminate\Database\Seeder;

class UsersInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Users\UserInfo::create([
            'user_id' => '23',
            'name' => 'Nicholas',
            'NRIC' => '951230-03-10203'
        ]);

        App\Models\Users\UserInfo::create([
            'user_id' => '30',
            'name' => 'Alex',
            'NRIC' => '911630-03-10603'
        ]);

        App\Models\Users\UserInfo::create([
            'user_id' => '40',
            'name' => 'Penny',
            'NRIC' => '921330-39-19603'
        ]);
    }
}
