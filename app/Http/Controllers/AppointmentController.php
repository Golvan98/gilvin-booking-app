<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use App\Notifications\AppointmentCancelled;

class AppointmentController extends Controller
{
    public function cancelAppointment(Appointment $appointment)
    {   $id = $appointment->id;
    
            
        $cancelappointment = DB::table('appointments')->where('id', $id)->update(['appointment_status' => 'cancelled']);

        $appointment->consultee->notify(new AppointmentCancelled($appointment));
        
       return redirect()->back()->with('success', 'appointment cancelled');
    }
    
}
