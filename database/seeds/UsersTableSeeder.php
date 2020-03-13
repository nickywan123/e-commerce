<?php

use App\Models\Users\User;
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

        // Customer 1
        $customer1 = User::create([
            'account_id' => 1913000001,
            'email' => 'customer1@email.com',
            'password' => bcrypt('password')
        ]);

        $customer1->userInfo()->create([
            'full_name' => 'Customer Number 1',
            'nric' => '123456789123',
            'race' => 1,
            'gender' => 1,
            'date_of_birth' => '56/34/12',
            'marital_status_id' => 1,
            'dealer_id' => 3,
            'referrer_id' => 1
        ]);

        $customer1->userAddresses()->createMany([
            [
                'address_1' => 'Address line 1',
                'address_2' => 'Address line 2',
                'address_3' => 'Address line 3',
                'postcode' => '42000',
                'city' => 'Kuala Lumpur',
                'state' => 1,
                'is_shipping_address' => 1
            ],
            [
                'address_1' => 'Address line 1',
                'address_2' => 'Address line 2',
                'address_3' => 'Address line 3',
                'postcode' => '68000',
                'city' => 'Kuala Lumpur',
                'state' => 2,
            ]
        ]);

        $customer1->userContacts()->createMany([
            [
                'contact_num' => '0194039056',
                'is_home' => 1
            ],
            [
                'contact_num' => '0191233333',
                'is_mobile' => 1
            ]
        ]);

        // Get current customer account id.
        $currentCustomerId = User::largestCustomerId();

        // Customer 2
        $customer2 = User::create([
            'account_id' => $currentCustomerId + 1,
            'email' => 'customer2@email.com',
            'password' => bcrypt('password')
        ]);

        $customer2->userInfo()->create([
            'full_name' => 'Customer Number 2',
            'nric' => '123456789123',
            'race' => 1,
            'gender' => 1,
            'date_of_birth' => '56/34/12',
            'marital_status_id' => 1,
            'dealer_id' => 3,
            'referrer_id' => 1
        ]);

        $customer2->userAddresses()->create([
            'address_1' => 'Address line 1',
            'address_2' => 'Address line 2',
            'address_3' => 'Address line 3',
            'postcode' => '42000',
            'city' => 'Kuala Lumpur',
            'state' => 1,
            'is_shipping_address' => 1
        ]);

        $customer2->userContacts()->createMany([
            [
                'contact_num' => '0194039056',
                'is_home' => 1
            ],
            [
                'contact_num' => '0191233333',
            ]
        ]);

        // Dealer 1
        $dealer1 = User::create([
            'account_id' => 1911000001,
            'email' => 'dealer1@email.com',
            'password' => bcrypt('password')
        ]);

        $dealer1->userInfo()->create([
            'full_name' => 'Dealer Number 1',
            'nric' => '123456789123',
            'race' => 1,
            'gender' => 1,
            'date_of_birth' => '56/34/12',
            'marital_status_id' => 1,
            'dealer_id' => 3,
            'referrer_id' => 1
        ]);

        $dealer1->userAddresses()->create([
            'address_1' => 'Address line 1',
            'address_2' => 'Address line 2',
            'address_3' => 'Address line 3',
            'postcode' => '42000',
            'city' => 'Kuala Lumpur',
            'state' => 1,
            'is_shipping_address' => 1
        ]);

        $dealer1->userContacts()->createMany([
            [
                'contact_num' => '0194039056',
                'is_home' => 1
            ],
            [
                'contact_num' => '0191233333'
            ]
        ]);

        // Get current dealer account id
        $currentDealerId = User::largestDealerId();

        // Dealer 2
        $dealer2 = User::create([
            'account_id' => $currentDealerId + 1,
            'email' => 'dealer2@email.com',
            'password' => bcrypt('password')
        ]);

        $dealer2->userInfo()->create([
            'full_name' => 'Dealer Number 2',
            'nric' => '123456789123',
            'race' => 1,
            'gender' => 1,
            'date_of_birth' => '56/34/12',
            'marital_status_id' => 1,
            'dealer_id' => 3,
            'referrer_id' => 1
        ]);

        $dealer2->userAddresses()->create([
            'address_1' => 'Address line 1',
            'address_2' => 'Address line 2',
            'address_3' => 'Address line 3',
            'postcode' => '42000',
            'city' => 'Kuala Lumpur',
            'state' => 1,
        ]);

        $dealer2->userContacts()->createMany([
            [
                'contact_num' => '0194039056',
                'is_home' => 1
            ],
            [
                'contact_num' => '0191233333'
            ]
        ]);

        // Panel 1
        $panel1 = User::create([
            'account_id' => 1918000001,
            'email' => 'panel1@email.com',
            'password' => bcrypt('password')
        ]);

        $panel1->userInfo()->create([
            'full_name' => 'Panel Number 1',
            'nric' => '123456789123',
            'race' => 1,
            'gender' => 1,
            'date_of_birth' => '56/34/12',
            'marital_status_id' => 1,
            'dealer_id' => 3,
            'referrer_id' => 1
        ]);

        $panel1->userAddresses()->create([
            'address_1' => 'Address line 1',
            'address_2' => 'Address line 2',
            'address_3' => 'Address line 3',
            'postcode' => '42000',
            'city' => 'Kuala Lumpur',
            'state' => 1,
            'is_shipping_address' => 1
        ]);

        $panel1->userContacts()->createMany([
            [
                'contact_num' => '0194039056',
                'is_home' => 1
            ],
            [
                'contact_num' => '0191233333'
            ]
        ]);

        $panel1->assignRole('panel');

        // Get current panel account id.
        $currentPanelId = User::largestPanelId();

        // Panel 2
        $panel2 = User::create([
            'account_id' => $currentPanelId + 1,
            'email' => 'panel2@email.com',
            'password' => bcrypt('password')
        ]);


        $panel2->userInfo()->create([
            'full_name' => 'Panel Number 2',
            'nric' => '123456789123',
            'race' => 1,
            'gender' => 1,
            'date_of_birth' => '56/34/12',
            'marital_status_id' => 1,
            'dealer_id' => 3,
            'referrer_id' => 1
        ]);

        $panel2->userAddresses()->create([
            'address_1' => 'Address line 1',
            'address_2' => 'Address line 2',
            'address_3' => 'Address line 3',
            'postcode' => '42000',
            'city' => 'Kuala Lumpur',
            'state' => 1,
            'is_shipping_address' => 1
        ]);

        $panel2->userContacts()->createMany([
            [
                'contact_num' => '0194039056'
            ],
            [
                'contact_num' => '0191233333',
                'is_home' => 1
            ]
        ]);

        $panel2->assignRole('panel');

        // Get current panel account id.
        $currentPanelId = User::largestPanelId();

        // Panel 3.
        $panel3 = User::create([
            'account_id' => $currentPanelId + 1,
            'email' => 'panel3@email.com',
            'password' => bcrypt('password')
        ]);

        $panel3->userInfo()->create([
            'full_name' => 'Panel Number 3',
            'nric' => '123456789123',
            'race' => 1,
            'gender' => 1,
            'date_of_birth' => '56/34/12',
            'marital_status_id' => 1,
            'dealer_id' => 3,
            'referrer_id' => 1
        ]);

        $panel3->userAddresses()->create([
            'address_1' => 'Address line 1',
            'address_2' => 'Address line 2',
            'address_3' => 'Address line 3',
            'postcode' => '42000',
            'city' => 'Kuala Lumpur',
            'state' => 1,
            'is_shipping_address' => 1
        ]);

        $panel3->userContacts()->createMany([
            [
                'contact_num' => '0194039056',
                'is_home' => 1
            ],
            [
                'contact_num' => '0191233333',
            ]
        ]);

        $panel3->assignRole('panel');
    }
}
