<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\Language;
use App\Models\Program;
use App\Models\Role;
use App\Models\Subject;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    protected $model = Program::class;

    public function definition()
    {
        $startDate = Carbon::parse($this->faker->dateTimeBetween('-9 months', '+2 months'));
        $startTime = Carbon::parse($this->faker->time('h:m A'));

        return [
            'grade_id' => Grade::query()->inRandomOrder()->first()->id,
            'image' => $this->faker->imageUrl(),
            'fees' => $this->faker->randomFloat(2, 50, 5000),
            'class_type' => $this->faker->randomElement(array ('Theory', 'Paper', 'Revision')),
            'start_date' => $startDate,
            'end_date' => $startDate->addMonths(12),
            'start_time' => $startTime,
            'end_time' => $startTime->addHours(2),
            'day' => $this->faker->dayOfWeek(),
            'user_id' => User::role(Role::ROLE_TEACHER)->inRandomOrder()->first()->id,
            'subject_id' => Subject::query()->inRandomOrder()->first()->id,
            'language_id' => Language::query()->inRandomOrder()->first()->id,
        ];
    }
}
