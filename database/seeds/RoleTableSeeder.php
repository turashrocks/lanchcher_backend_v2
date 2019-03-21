<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role_name' => 'Superadmin',
            'role_description' => 'Superadmin Description'
        ]);
        Role::create([
            'role_name' => 'Admin',
            'role_description' => 'Admin Description'
        ]);
        Role::create([
            'role_name' => 'Admin Moderator',
            'role_description' => 'Admin Moderator Description'
        ]);
        Role::create([
            'role_name' => 'User',
            'role_description' => 'User Description'
        ]);
        Role::create([
            'role_name' => 'Tester',
            'role_description' => 'Tester Description'
        ]);
    }
}
