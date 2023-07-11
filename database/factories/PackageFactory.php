<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->words(3, true),
            'benefit' => fake()->sentences(2, true),
            'description' => fake()->paragraph(2),
            'price' => fake()->randomElement([2000000, 5000000, 8000000]),
            'merchant_id' => fake()->numberBetween(1, 100)
        ];
    }
}
