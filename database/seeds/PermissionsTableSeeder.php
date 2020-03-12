<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permissions
        Permission::create([
            'name' => 'view all products'
        ]);

        Permission::create([
            'name' => 'create a product'
        ]);

        Permission::create([
            'name' => 'edit a product'
        ]);

        // Permission::create([
        //     'name' => ''
        // ]);

        // Permission::create([
        //     'name' => ''
        // ]);

        // Permission::create([
        //     'name' => ''
        // ]);

        // Permission::create([
        //     'name' => ''
        // ]);

        // Permission::create([
        //     'name' => ''
        // ]);

        // Permission::create([
        //     'name' => ''
        // ]);

        $customer = Role::create([
            'name' => 'customer'
        ]);

        $dealer = Role::create([
            'name' => 'dealer'
        ]);

        $panel = Role::create([
            'name' => 'panel'
        ]);

        $panel->givePermissionTo('view all products');
        $panel->givePermissionTo('create a product');
        $panel->givePermissionTo('edit a product');

        $administrator = Role::create([
            'name' => 'administrator'
        ]);
    }
}
