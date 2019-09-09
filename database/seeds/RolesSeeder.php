<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = Role::create([
            'name' => 'Super Administrador',
            'slug' => 'superadmin',
            'permissions' => [
                'create-user' => true,
            ],
        ]);

        $admin = Role::create([
            'name' => 'Administrador',
            'slug' => 'admin',
            'permissions' => [
                'create-user' => false,
            ],
        ]);
    }
}
