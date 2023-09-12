<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AppointmentRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Professional;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use illuminate\Contracts\Auth\User as Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\Guard as AuthGuard;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\Guard;
use Illuminate\Support\Facades\DB;
use App\Models\ProfessionalServices;
use Illuminate\Pagination\Paginator;



class AppointmentRequestController extends Controller
{
    public function rejectRequest(AppointmentRequest $appointmentrequest)
    {

        
        $reject = DB::table('appointment_requests')->where('id', $appointmentrequest->id)->update(['request_status' => 'rejected']);
    
        return redirect()->back()->with('success', 'request rejected');


    }

    public function acceptRequest(AppointmentRequest $appointmentrequest)
    {
        $accept = DB::table('appointment_requests')->where('id', $appointmentrequest->id)->update(['request_status' => 'approved']);

        
        $testcreate =  Appointment::create(
            [
                'appointment_status' => 'pending',
                'by_professional_id' => $appointmentrequest->by_professional_id,
                'by_user_id' => $appointmentrequest->by_user_id,
                'appointment_schedule_start' => $appointmentrequest->request_schedule_start,
                'appointment_schedule_end ' => $appointmentrequest->request_schedule_end,
                'request' => $appointmentrequest->request,
            ]);

        DB::table('appointment_requests')->where('id', $appointmentrequest->id)->delete();

        return redirect('/professionalProfile')->with('success', 'request approved and appointment created');
    }

    public function deleteRequest(AppointmentRequest $appointmentrequest)
    {

      
        $delete = DB::table('appointment_requests')->where('id', $appointmentrequest->id)->delete();

        return redirect()->back()->with('success', 'request deleted');

    }

    public function editRequest(AppointmentRequest $appointmentrequest, Request $request)
    {

       
      
        $data = $request->validate([
            'request' => 'required',
            'request_schedule_start' => 'required',
            'request_schedule_end' => 'required'
        ]);
       
        $updaterequest = DB::table('appointment_requests')->where('id' , $appointmentrequest->id)->update($data);

        return redirect()->back()->with('success', 'update successful');
  
        
    }

    

}
