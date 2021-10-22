<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Models\Users\User;

class PermissionsSeeder extends Seeder
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
            'name' => 'create product'
        ]);

        Permission::create([
            'name' => 'edit product'
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

        $panel->givePermissionTo('create product');
        $panel->givePermissionTo('edit product');

        $administrator = Role::create([
            'name' => 'administrator'
        ]);
    }
}
