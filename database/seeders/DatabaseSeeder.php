<?php

namespace Database\Seeders;

use App\Models\Medium;
use App\Models\Model_Has_Role;
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
        $this->call(UserSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(ProgramSeeder::class);
    }
}
