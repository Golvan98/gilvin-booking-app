<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

        return redirect()->back()->with('success', 'request approved');
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

        return redirect('/userProfile')->with('success', 'update successful');

        
        
    }

    

}
