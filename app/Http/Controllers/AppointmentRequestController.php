<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AppointmentRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AppointmentRequestController extends Controller
{
    public function rejectRequest(AppointmentRequest $appointmentRequest)
    {

        dd('reject route here!');
        $delete = DB::table('appointment_requests')->where('id', 1)->update(['request_status' => 'approved']);
     

    }
}
