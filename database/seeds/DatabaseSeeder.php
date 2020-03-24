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
            GlobalTablesSeeder::class,
            PermissionsTableSeeder::class, // Important -> Registrations and logins uses roles and permissions.
            UsersTableSeeder::class,
            CategoriesTableSeeder::class, // Important -> Need to have at least 1 for /shop to work.
            QualitiesTableSeeder::class, // Important -> Need to have all of the rows to correctly show product's quality.
            ProductsTableSeeder::class, // Important -> Need to have at least 1 for /shop to work.
          
        ]);
    }
}
