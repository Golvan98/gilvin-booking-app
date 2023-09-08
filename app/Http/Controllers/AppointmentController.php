<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function cancelAppointment(Appointment $appointment)
    {   $id = $appointment->id;
    
            
        $cancelappointment = DB::table('appointments')->where('id', $id)->update(['appointment_status' => 'cancelled']);
        
        return redirect('/home')->with('success', 'cancel test!');
    }
}
