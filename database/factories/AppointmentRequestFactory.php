<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppointmentRequest>
 */
class AppointmentRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'request' => fake()->sentence(),
            'request_schedule' => fake()->dateTimeThisMonth(),
            'request_status' => fake()->randomElement(['approved' , 'rejected']),
            'by_user_id' => fake()->randomElement(['1', '2', '3',])
            
        ];
    }
}
