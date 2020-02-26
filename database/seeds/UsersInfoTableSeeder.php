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
        App\Models\UserInfo::create([
            'name' => 'Nicholas',
            'NRIC' => '951230-03-10203'
        ]);

        App\Models\UserInfo::create([
            'name' => 'Alex',
            'NRIC' => '911630-03-10603'
        ]);

        App\Models\UserInfo::create([
            'name' => 'Penny',
            'NRIC' => '921330-39-19603'
        ]);
    }
}
