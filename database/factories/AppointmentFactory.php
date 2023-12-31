<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'appointment_schedule_start' => fake()->dateTimeThisMonth(),
            'appointment_schedule_end' => fake()->dateTimeThisMonth(),
            'appointment_Status' => fake()->randomElement(['upcoming', 'done']),
            'request' => fake()->sentence()
        ];
    }
}
