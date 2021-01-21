<?php

namespace Database\Seeders;

use App\Models\PaymentPolicy;
use Illuminate\Database\Seeder;

class PaymentPolicySeeder extends Seeder
{
    public function run()
    {
        PaymentPolicy::query()->insert([
            ['name' => 'enroll', 'value' => '0'],
            ['name' => 'Free Card', 'value' => '0'],
            ['name' => '50% Bonus', 'value' => '50'],
            ['name' => 'Normel Price', 'value' => '100'],
        ]);
    }
}
