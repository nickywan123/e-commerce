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
            PermissionsTableSeeder::class, // Important -> Registrations and logins uses roles and permissions.
            UsersTableSeeder::class,
            StatusesTableSeeder::class, // Important -> Need to have to show statuses correctly.
            CategoriesTableSeeder::class, // Important -> Need to have at least 1 for /shop to work.
            SubCategoriesTableSeeder::class, // Important -> Need to have at least 1 for /shop to work.
            ProductTypesTableSeeder::class, // Important -> Need to have at least 1 for /shop to work.
            QualitiesTableSeeder::class, // Important -> Need to have all of the rows to correctly show product's quality.
            ProductsTableSeeder::class, // Important -> Need to have at least 1 for /shop to work.
        ]);
    }
}
