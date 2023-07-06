<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Professional;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Professional::factory(4)->create();
        \App\Models\User::factory(2)->create();

        \App\Models\Appointment::factory(2)->create([
            'by_professional_id' => 1,
            'by_user_id' => 1
        ]);
    }
}
