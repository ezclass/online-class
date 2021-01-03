<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    public function definition()
    {
        return [
            'subject' => $this->faker->word,
        ];
    }
}
