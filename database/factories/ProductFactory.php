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
            'name' => ucwords($this->faker->words(3, true)),
            'description' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(640, 640, 'food', true),
            'price' => $this->faker->numberBetween(10000, 100000),
            'stock' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->boolean,
            'is_favorite' => $this->faker->boolean,
            'category_id' => $this->faker->numberBetween(1, 4),
        ];
    }
}
