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
        // Permissions.
        Permission::create([
            'name' => 'manage products'
        ]);

        Permission::create([
            'name' => 'view all products'
        ]);

        Permission::create([
            'name' => 'create a product'
        ]);

        Permission::create([
            'name' => 'edit a product'
        ]);

        Permission::create([
            'name' => 'delete a product'
        ]);

        Permission::create([
            'name' => 'manage users'
        ]);

        Permission::create([
            'name' => 'view all users'
        ]);

        Permission::create([
            'name' => 'create a user'
        ]);

        Permission::create([
            'name' => 'edit a user'
        ]);

        Permission::create([
            'name' => 'delete a user'
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

        $administrator->givePermissionTo('manage users');
        $administrator->givePermissionTo('view all users');
        $administrator->givePermissionTo('create a user');
        $administrator->givePermissionTo('edit a user');
        $administrator->givePermissionTo('delete a user');
        $administrator->givePermissionTo('manage products');
        $administrator->givePermissionTo('view all products');
        $administrator->givePermissionTo('create a product');
        $administrator->givePermissionTo('edit a product');
        $administrator->givePermissionTo('delete a product');
    }
}
