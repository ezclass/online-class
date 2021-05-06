<?php

namespace Database\Factories;

use App\Models\Lesson;
use App\Models\Program;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    protected $model = Lesson::class;

    public function definition()
    {
        $startsAt = Carbon::parse($this->faker->dateTimeBetween('-2 months', '+6 months'));

        return [
            'name' => $this->faker->title,
            'description' => $this->faker->sentence,
            'class_date' => $startsAt,
            'program_id' => Program::factory(),
        ];
    }
}
