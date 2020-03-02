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

        // create demo users
        $user = Factory(App\Models\Users\User::class)->create([


            'name' => 'Alex The Customer',
            'email' => 'customer@example.com',
            'role' => 1

            // factory default password is 'secret'
        ]);
        $user->assignRole('customer');

        $user = Factory(App\Models\Users\User::class)->create([


            'name' => 'James The Dealer',
            'email' => 'dealer@example.com',
            'role' => 2

            // factory default password is 'secret'
        ]);
        $user->assignRole('dealer');

        $user = Factory(App\Models\Users\User::class)->create([

            'name' => 'Tony The Panel',
            'email' => 'panel@example.com',
            'role' => 3

            // factory default password is 'secret'
        ]);
        $user->assignRole('panel');
    }
}
