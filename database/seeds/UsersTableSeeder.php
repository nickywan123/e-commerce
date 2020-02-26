<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'store1@email.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'email' => 'store2@email.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'email' => 'store3@email.com',
            'password' => bcrypt('password'),
        ]);
    }
}
