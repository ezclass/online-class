<?php

namespace Database\Factories;
use App\Models\Grade;
use App\Models\Language;
use App\Models\Program;
use App\Models\Role;
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
            'grade_id' => Grade::query()->inRandomOrder()->first()->id,
            'image' => $this->faker->imageUrl(),
            'fees' => $this->faker->randomFloat(2, 50, 5000),
            'user_id' => User::role(Role::ROLE_TEACHER)->inRandomOrder()->first()->id,
            'subject_id' => Subject::query()->inRandomOrder()->first()->id,
            'language_id' => Language::query()->inRandomOrder()->first()->id,
        ];
    }
}
