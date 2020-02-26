<?php

use Illuminate\Database\Seeder;

class UsersAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\UserAddress::create([

            'user_id' => '91856',
            'address_1' => '23 Jalan Aroe Poejs',
            'address_2' => 'Taman Tasik BB',
            'address_3' => 'Kerbau',
            'zipcode' => '58000',
            'state' => '1',
            'shipping_address'=>'xxxccccxxx'
        ]);

        App\Models\UserAddress::create([

            'user_id' => '46736',
            'address_1' => '2 Jalan Pasir Kaes',
            'address_2' => 'Awu sik BB',
            'address_3' => 'Abau',
            'zipcode' => '70000',
            'state' => '0',
            'shipping_address'=>'xxxaaaxxxx'
        ]);

        App\Models\UserAddress::create([

            'user_id' => '77736',
            'address_1' => '6 Jalan Bu Kaes',
            'address_2' => 'xxx sik BB',
            'address_3' => 'kkau',
            'zipcode' => '98000',
            'state' => '0',
            'shipping_address'=>'xxxxbbbxxx'
        ]);
    }
}
