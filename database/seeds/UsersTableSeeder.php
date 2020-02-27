<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\Models\Users\User::create([
            'user_id' => '23',
            'email' => 'nicholaswan21@hotmail.com',
            'password' => '12345678'
        ]);
    }
}
