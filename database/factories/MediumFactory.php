<?php

namespace Database\Factories;

use App\Models\Medium;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediumFactory extends Factory
{
    protected $model = Medium::class;

    public function definition()
    {
        return [
            'medium' => $this->faker->languageCode,
        ];
    }
}
