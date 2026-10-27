<?php

namespace Database\Factories;

use App\Models\Cars;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cars>
 */
class CarsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'marka' => fake()->marka(),
            'model' => fake()->model(),
            'color' => fake()->color(),
            'year' => fake()->year(),
            'price' => fake()->price(),
            'country' => fake()->country(),
        ];
    }
}
