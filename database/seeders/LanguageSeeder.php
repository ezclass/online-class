<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    public function run()
    {
        Language::query()->insert([
            ['name' => 'සිංහල මාධ්‍යය'],
            ['name' => 'English medium'],
            ['name' => 'தமிழ் ஊடகங்கள்'],
        ]);
    }
}
