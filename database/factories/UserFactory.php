<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'phone_number' => $this->faker->unique()->phoneNumber,
            'phone_number_verified_at' => now(),
            'gender' => $this->faker->randomElement(array('Male', 'Female')),
            'password' => '$2y$10$5jcxOl3shnh.2nnRXqeC/OOcPp4oVFBvrC.ukfq/iXcK2lIA2d1Gq',
            'avatar' => 'avatar.jpg',
            'remember_token' => Str::random(10),
        ];
    }
}
