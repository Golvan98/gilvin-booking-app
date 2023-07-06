<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProfessionalServices>
 */
class ProfessionalServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service' => fake()->randomElement(['Civil Engineering', 'Law Services', 'Medical Advice', 'Web Development', 'Architecture', 'Miscellaneous Consulting'])
        ];
    }
}
