<?php

namespace Database\Seeders;

use App\Models\Medium;
use Illuminate\Database\Seeder;

class MediumSeeder extends Seeder
{
    public function run()
    {
        Medium::query()->insert([
            ['medium' => 'සිංහල මාධ්‍යය'],
            ['medium' => 'English medium'],
            ['medium' => 'දෙමළ මාධ්‍යය'],
        ]);
    }
}
