<?php

namespace Database\Factories;

use App\Models\Medium;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'grade' => $this->faker->randomNumber(),
            'image' => $this->faker->imageUrl(),
            'user_id' => User::factory(),
            'subject_id' => Subject::factory(),
            'medium_id' => Medium::factory(),
        ];
    }
}
