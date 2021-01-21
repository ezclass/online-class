<?php

namespace Database\Seeders;

use App\Models\PaymentPolicy;
use Illuminate\Database\Seeder;

class PaymentPolicySeeder extends Seeder
{
    public function run()
    {
        PaymentPolicy::query()->insert([
            ['name' => 'Free Card'],
            ['name' => '50% Bonus'],
            ['name' => 'Normel Price'],
        ]);
    }
}
