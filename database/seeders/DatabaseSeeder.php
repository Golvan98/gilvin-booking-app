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

        \App\Models\User::factory()->create([
            'first_name' => 'User',
            'last_name' => 'User',
             'email' => 'test@example.com',
             'password' => 'password'
             
        ]);

        \App\Models\Professional::factory()->create([
        
             'email' => 'professionaltest@example.com',
        ]);

        \App\Models\Professional::factory(13)->create();
        \App\Models\User::factory(2)->create([
            'password' => 'password'
        ]);

        \App\Models\Appointment::factory(2)->create([
            'by_professional_id' => 1,
            'by_user_id' => 1
        ]);

        \App\Models\ProfessionalServices::factory(9)->create([
            'by_professional_id' => 1
        ]);

        \App\Models\AppointmentRequest::factory(12)->create([ 
            'by_professional_id' => 1,
        ]);

        $CivilEngineers = \App\Models\Professional::where('profession', 'Civil Engineer');
        $Professionals = \App\models\Professional::all();
        // idea here is to query each civil engineers into associate() Civil Engineer for civil services as db.
        // Speaking of, you might want to add a feature in which a professional gets to add his list of services too.
    }
}
