<?php

namespace Database\Factories;

use App\Models\Language;
use App\Models\Program;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    protected $model = Program::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'grade' => $this->faker->randomNumber(),
            'image' => $this->faker->imageUrl(),
            'user_id' => User::factory(),
            'subject_id' => Subject::factory(),
            'language_id' => Language::factory(),
        ];
    }
}
