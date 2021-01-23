<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        collect(range(1, 20))->each(function ($id) {
            User::factory()->create(['email' => "student_{$id}@ezclass.lk"])->assignRole(Role::ROLE_STUDENT);
        });

        collect(range(1, 5))->each(function ($id) {
            User::factory()->create(['email' => "teacher_{$id}@ezclass.lk"])->assignRole(Role::ROLE_TEACHER);
        });

        collect(range(1, 2))->each(function ($id) {
            User::factory()->create(['email' => "admin_{$id}@ezclass.lk"])->assignRole(Role::ROLE_ADMIN);
        });
    }
}
