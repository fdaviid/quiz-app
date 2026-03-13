<?php

namespace Database\Factories;

use App\Models\answer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class answerFactory extends Factory
{
    protected $model = answer::class;

    public function definition(): array
    {
        return [
            'answer' => $this->faker->word(),
            'isCorrect' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
