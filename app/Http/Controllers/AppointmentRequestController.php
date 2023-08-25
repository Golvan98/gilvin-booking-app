<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AppointmentRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AppointmentRequestController extends Controller
{
    public function rejectRequest(AppointmentRequest $appointmentrequest)
    {

        
        $reject = DB::table('appointment_requests')->where('id', $appointmentrequest->id)->update(['request_status' => 'rejected']);
    
        return redirect()->back()->with('success', 'request rejected');
     

    }
}
