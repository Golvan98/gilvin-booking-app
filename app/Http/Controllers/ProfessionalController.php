<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AppointmentRequest;
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


class ProfessionalController extends Controller
{
    public function professionalProfile()
    {

    $user = Auth::guard('professional')->user();
   

    $services =  ProfessionalServices::all()->whereIn('by_professional_id', $user->id);
    $bio = $user->bio;

    $requests = AppointmentRequest::all()->whereIn('by_professional_id', $user->id);
    $consulteeids = AppointmentRequest::all()->pluck('by_user_id');
    $consultees = User::all()->whereIn('id', $consulteeids);




    $rejected = 'rejected';
    $pending = 'pending';

   // $pendingRequests = DB::table('appointment_requests')->where('by_professional_id', $user->id)->where('request_status', $pending)->get();

 
        return inertia('Index/ProfessionalProfile',
        [
            'services' => $services,
            'bio' => $bio,
            'requests'=> $requests, 
            'consultees' => $consultees,
            'pendingRequests' => DB::table('appointment_requests')->where('by_professional_id', $user->id)->where('request_status', $pending)->paginate(4),
            'appointments' => DB::table('appointments')->where('by_professional_id', $user->id)->whereNot('appointment_status', 'cancelled')->paginate(3)
        
        ]);
    }

    public function editProfessional(Request $request)
    {
        $user = Auth::guard('professional')->user()->id;
        
        
        $data = $request->validate([
            
            'first_name' => 'required|min:2|max:20',
            'email' => 'required|string|email|unique:users',
            'last_name' => 'required|min:2|max:20',
            'profession' => 'required|string|max:20',
            
        ]);

        $update = DB::table('professionals')->where('id', $user)->update($data);

        return redirect()->back()->with('success', 'Profile Updatedz');
    }

    public function deleteProfessional(Request $request)
    {
        $user = Auth::guard('professional')->user();

        
      $yawa =  DB::table('professionals')->where('id', $user->id)->delete();

        

        return redirect('/home')->with('success', 'Profile Deleted');

    }

    public function addService(Request $request)
    {

        $user = Auth::guard('professional')->user();

        $service = $request->validate([
            'service' => 'required|min:2|max:35'
        ]);

        

        $test = ProfessionalServices::create(['service' => $request->service, 'by_professional_id' => $user->id]);
        
        return redirect()->back()->with('success', 'Service Created');
    }

    public function bioEdit(Request $request)
    {
        $prof = Auth::guard('professional')->user()->id;
        
        $data = $request->validate([
            'bio' => 'required|min:2|max:300'
        ]);
        

        $test = Auth::guard('professional')->user()->id;
        
        $update = DB::table('professionals')->where('id', $prof)->update($data);
        return redirect()->back()->with('success', 'Bio Updated successfully');
    }

}
