<?php

namespace Database\Factories;

use App\Models\Riddle;
use Illuminate\Database\Eloquent\Factories\Factory;

class RiddleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Riddle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->text,
            'solution' => $this->faker->text,
            'difficulty' => rand(0, 8),
        ];
    }
}
