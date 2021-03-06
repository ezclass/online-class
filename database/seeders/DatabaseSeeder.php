<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(ProgramSeeder::class);
    }
}
