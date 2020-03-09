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
            StatusesTableSeeder::class,
            CategoriesTableSeeder::class, // Important -> Need to have at least 1 for /shop to work.
            SubCategoriesTableSeeder::class, // Important -> Need to have at least 1 for /shop to work.
            ProductTypesTableSeeder::class, // Important -> Need to have at least 1 for /shop to work.
            QualitiesTableSeeder::class, // Important -> Need to have all of the rows to correctly show product's quality.
            ProductsTableSeeder::class, // Important -> Need to have at least 1 for /shop to work.
            PermissionsSeeder::class // Important -> Need to have all rows of data for login & registration to work.

        ]);
    }
}
