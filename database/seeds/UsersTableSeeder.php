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
            'name' => 'Store 1',
            'email' => 'store1@email.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Store 2',
            'email' => 'store2@email.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Store 3',
            'email' => 'store3@email.com',
            'password' => bcrypt('password'),
        ]);
    }
}
