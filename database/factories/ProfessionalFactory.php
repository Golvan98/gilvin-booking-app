<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professional>
 */
class ProfessionalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'profession' => fake()->randomElement(['Lawyer', 'Doctor', 'Engineer', 'Software Engineer', 'Accountant', 'English Tutor', 'Professor']),
            'bio' => fake()->sentence(),
        ];
    }
}
