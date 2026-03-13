<?php

namespace Database\Factories;

use App\Models\question;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class questionFactory extends Factory
{
    protected $model = question::class;

    public function definition(): array
    {
        return [
            'question' => $this->faker->word(),
            'hint' => $this->faker->word(),
            'difficulty' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
