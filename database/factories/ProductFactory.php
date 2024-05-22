<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(rand(1, 3), true),
            'description' => fake()->words(rand(20, 30), true),
            'price' => rand(1, 100),
            'brand' => fake()->name(),
            'img' => fake()->imageUrl(640, 480),
        ];
    }
}

