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

        // create permissions
        Permission::create(['name' => 'view shop']);
        Permission::create(['name' => 'view dealer']);
        Permission::create(['name' => 'view panel']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'customer']);
        $role1->givePermissionTo('view shop');

        $role2 = Role::create(['name' => 'dealer']);
        $role2->givePermissionTo('view dealer');

        $role3 = Role::create(['name' => 'panel']);
        $role3->givePermissionTo('view panel');
    }
}
