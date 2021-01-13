<?php

namespace Database\Factories;
use App\Models\Program;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    protected $model = Program::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'grade_id' => $this->faker->numberBetween(1,14),
            'image' => $this->faker->imageUrl(),
            'user_id' => $this->faker->numberBetween(1,20),
            'subject_id' => $this->faker->numberBetween(1,45),
            'language_id' => $this->faker->numberBetween(1,3),
        ];
    }
}
