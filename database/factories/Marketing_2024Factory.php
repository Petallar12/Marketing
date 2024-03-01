<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Marketing_2024; // Ensure this matches the namespace and class name of your model.

use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marketing_2024>
 */
class Marketing_2024Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'month' => $this->faker->numberBetween(1, 12),
            'source' => $this->faker->word(),
            'leads' => $this->faker->numberBetween(1, 100),
            'case_officer' => $this->faker->name(),
            'date_assigned' => $this->faker->dateTimeThisYear(),
            'name' => $this->faker->name(),
            'nationality' => $this->faker->country(),
            'residence' => $this->faker->city(),
            'dob' => $this->faker->date('Y-m-d', '2000-01-01'),
            'age' => $this->faker->numberBetween(18, 60),
            'email' => $this->faker->unique()->safeEmail(),
            'contact_number' => $this->faker->phoneNumber(),
            'product_inquired' => $this->faker->word(),
            'other_message' => $this->faker->text(),
            'inquire_dependent' => $this->faker->boolean(),
            'number_dependent' => $this->faker->numberBetween(0, 5),
            'status' => $this->faker->randomElement(['active', 'inactive', 'pending']),
            'product_offered' => $this->faker->word(),
            'quoted_premium' => $this->faker->randomFloat(2, 100, 10000),
            'potential_commission' => $this->faker->randomFloat(2, 100, 5000),
            'insured_headcount' => $this->faker->numberBetween(1, 500),
            'placement_date' => $this->faker->date(),
            'product_sold_offered' => $this->faker->word(),
            'premium_annual' => $this->faker->randomFloat(2, 1000, 10000),
            'commission_percentage' => $this->faker->randomFloat(2, 1, 100),
            'commission' => $this->faker->randomFloat(2, 100, 1000),
            'tat' => $this->faker->randomDigit(),
            'reason' => $this->faker->sentence(),
            'remarks' => $this->faker->text(),
            'encode_by' => $this->faker->name(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
