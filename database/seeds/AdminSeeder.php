<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// Asignación del rol
		$admin = Admin::create([
		    'name' => 'Carlos Anselmi',
		    'email' => 'carlosanselmi2@gmail.com',
		    'password' => bcrypt('19901020')
		]);

		$admin->assignRole('Administrador');
		$admin->givePermissionTo(['destroy_user', 'updated_user']);
    }
}
