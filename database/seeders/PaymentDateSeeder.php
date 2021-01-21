<?php

namespace Database\Seeders;

use App\Models\PaymentDate;
use Illuminate\Database\Seeder;

class PaymentDateSeeder extends Seeder
{
    public function run()
    {
        PaymentDate::query()->insert([
            ['name' => 'First Week'],
            ['name' => 'Second Week'],
            ['name' => 'Third Week'],
            ['name' => 'Last Week'],
        ]);
    }
}
