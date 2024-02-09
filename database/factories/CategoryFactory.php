<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique->randomElement(['Main Dishes', 'Appetizer', 'Beverage', 'Dessert']),
            'description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(640, 640, 'food', true),
        ];
    }
}
