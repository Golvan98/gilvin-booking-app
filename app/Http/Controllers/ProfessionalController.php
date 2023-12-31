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
            'appointments' => DB::table('appointments')->where('by_professional_id', $user->id)->whereNot('appointment_status', 'cancelled')->paginate(3),
            'appointmentsCount' => DB::table('appointments')->where('by_professional_id', $user->id)->whereNot('appointment_status', 'cancelled')->count(),
            'requestsCount' => DB::table('appointment_requests')->where('by_professional_id', $user->id)->where('request_status', $pending)->count(),
            'professional' => $user,
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

    public function uploadProfilePic(Request $request, Professional $professional)
        {
         
            if ($request->hasFile('profilepic')) {
                $file = $request->file('profilepic');
                $path = $file->store('public');

             
                
                DB::table('professionals')->where('id', $professional->id)->update(['profilepic' => $path]);
            //    $file->store('C:\Users\ASUS\gilvin-booking-app\storage\app');
              //   $professional->update(['profile_pic' => 'C:\Users\ASUS\gilvin-booking-app\storage\app']);
              session()->flash('success', 'Profile Picture uploaded successfully');

              return response()->json(['message' => 'Profile Picture uploaded successfully'], 200);
      
            }

            
        }

        public function viewProfessionalProfile(Request $request, Professional $viewProfessional)
        {

           
            $professionalServices = DB::table('professional_services')->where('by_professional_id', $viewProfessional->id)->pluck('service');
            
            return inertia('Index/viewProfessionalProfile',
            [
                'viewProfessional' => $viewProfessional,
                'authProfessional' => Auth::guard('professional')->user(),
                'professionalServices' => $professionalServices
    
            ]);

            
        }

        public function showProfessionals(Request $request)
        {


            $filters = $request->only([
                'first_name', 'profession'
            ]);
            $query = Professional::orderByDesc('created_at');

            if ($filters['first_name'] ?? false) {
                $query->where('first_name', 'LIKE', $filters['first_name'] . '%');
            }

            if ($filters['profession'] ?? false) {
                $query->where('profession', 'LIKE', '%' . $filters['profession'] . '%');
            }

           
            return inertia('Index/Professionals',
            [
                'filters' => $filters,
                'Professionals' => $query->paginate(6)
                ->withQueryString()
            ]
             );


             
             
        }


}
