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
            'note' => $this->faker->sentence,
            'starts_at' => $startsAt,
            'ends_at' => $startsAt->addHours(3),
            'program_id' => Program::factory(),
        ];
    }
}
