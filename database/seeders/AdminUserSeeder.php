<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $superadmin = User::create([
            'name' => 'super admin',
            'email' => 'superadmin@ezclass.lk',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $superadmin->assignRole('super admin');

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@ezclass.lk',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $admin->assignRole('admin');
    }
}
