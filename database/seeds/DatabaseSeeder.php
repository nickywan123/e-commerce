<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        $this->call([
            // OrdersTableSeeder::class,
            // OrdersTableSeeder::class,
            // UsersAddressTableSeeder::class,
            // UsersContactsTableSeeder::class,
            // UsersInfoTableSeeder::class,
            // UsersTableSeeder::class
            // UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            SubCategoriesTableSeeder::class,
            ProductTypesTableSeeder::class,
            ProductsTableSeeder::class,
            PermissionsSeeder::class
        ]);
    }
}
