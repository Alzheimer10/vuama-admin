<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
 
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['guard_name' => 'admin','name' => 'Administrador']);
        Permission::create(['guard_name' => 'admin','name' => 'destroy_user']);
        Permission::create(['guard_name' => 'admin','name' => 'updated_user']);
        Permission::create(['guard_name' => 'admin','name' => 'created_user']);
        $role->givePermissionTo('destroy_user');
        $role->givePermissionTo('updated_user');
        $role->givePermissionTo('created_user');
    }
}
