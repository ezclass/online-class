<?php

namespace Database\Seeders;

use App\Models\Medium;
use App\Models\Program;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(AdminUserSeeder::class);

        User::factory(10)->create();
        Medium::factory(10)->create();
        Program::factory(10)->create();
        Subject::factory(10)->create();
    }
}
