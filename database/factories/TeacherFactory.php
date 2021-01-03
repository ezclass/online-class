<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'prefix' => $this->faker->title(),
        ];
    }
}
