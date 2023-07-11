<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchant>
 */
class MerchantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->company(),
            'slug' => fake()->unique()->slug(),
            'description' => fake()->paragraph(5),
            'instagram' => fake()->userName(),
            'pic' => fake()->name(),
            'contact' => fake()->phoneNumber(),
            'email' => fake()->companyEmail(),
            'birth' => fake()->date(),
            'outlet' => fake()->randomDigitNotZero(),
            'area' => fake()->city(),
            'gross_income' => fake()->numberBetween(2000000, 5000000),
            'net_income' => fake()->numberBetween(1000000, 2000000),
            'contract' => fake()->filePath(),
            'user_id' => User::factory()->create([
                'role_id' => 2
            ]),
            'category_id' => fake()->numberBetween(1, 10)
        ];
    }
}
