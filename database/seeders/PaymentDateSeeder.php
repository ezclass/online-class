<?php

namespace Database\Seeders;

use App\Models\PaymentDate;
use Illuminate\Database\Seeder;

class PaymentDateSeeder extends Seeder
{
    public function run()
    {
        PaymentDate::query()->insert([
            ['name' => 'enroll', 'value' => '0'],
            ['name' => 'First Week', 'value' => '7'],
            ['name' => 'Second Week', 'value' => '14'],
            ['name' => 'Third Week', 'value' => '21'],
            ['name' => 'Last Week', 'value' => '28'],
        ]);
    }
}
