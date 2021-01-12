<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    public function run()
    {
        Grade::query()->insert([
            ['name' => 'Grade 1'],
            ['name' => 'Grade 2'],
            ['name' => 'Grade 3'],
            ['name' => 'Grade 4'],
            ['name' => 'Grade 5'],
            ['name' => 'Grade 6'],
            ['name' => 'Grade 7'],
            ['name' => 'Grade 8'],
            ['name' => 'Grade 9'],
            ['name' => 'Grade 10'],
            ['name' => 'Grade 11'],
            ['name' => '2021 A/L'],
            ['name' => '2022 A/L'],
            ['name' => '2023 A/L'],
        ]);
    }
}
