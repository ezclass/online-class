<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    public function run()
    {
        Program::factory(16)
            ->has(Lesson::factory()->count(5))
            ->create();
    }
}
