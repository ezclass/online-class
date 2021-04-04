<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::query()->insert([
            ['name' => \App\Models\Role::ROLE_SUPER_ADMIN, 'guard_name' => 'web'],
            ['name' => \App\Models\Role::ROLE_ADMIN, 'guard_name' => 'web'],
            ['name' => \App\Models\Role::ROLE_TEACHER, 'guard_name' => 'web'],
            ['name' => \App\Models\Role::ROLE_STUDENT, 'guard_name' => 'web'],
        ]);
    }
}
