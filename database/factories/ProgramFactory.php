<?php

namespace Database\Factories;

use App\Models\Medium;
use App\Models\Program;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'grade' => $this->faker->randomNumber(),
            'image' => $this->faker->imageUrl(),
            'subject' => $this->faker->word,
            'medium' => $this->faker->word,
            'teacher_id' => Teacher::factory(),
        ];
    }
}
