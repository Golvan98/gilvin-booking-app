<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
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
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Guard;
use Illuminate\Support\Facades\DB;
use App\Models\AppointmentRequest;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{
    //

    public function userProfile(Request $request, User $user)
    {
        $user = auth()->user();
        $bio = $user->bio;
        
        $consultantids = AppointmentRequest::all()->pluck('by_professional_id');
        $consultants = Professional::all()->whereIn('id', $consultantids);

       
    
        return inertia('Index/UserProfile',
    [
        'bio' => $user->bio,
        'pendingRequests' => DB::table('appointment_requests')->where('by_user_id', $user->id)->where('request_status', 'pending')->paginate(2),
        'consultants' => $consultants,
        'appointments' => DB::table('appointments')->where('by_user_id', $user->id)->whereNot('appointment_status', 'cancelled')->paginate(3),
        'requestsCount' => DB::table('appointment_requests')->where('by_user_id', $user->id)->where('request_status', 'pending')->count(),
        'appointmentsCount' => DB::table('appointments')->where('by_user_id', $user->id)->whereNot('appointment_status', 'cancelled')->count(),
    ]);
    }

    public function editProfile(Request $request, User $user)
    {
     //  dd($request->first_name);
        $data = $request->validate([
            'first_name' => 'required|min:2|max:20',
            'last_name' => 'required|min:2|max:20',
            'email' => 'required|string|email|unique:users',
        ]);
       $user = auth()->user();

       $test = DB::table('users')
        ->where('id', $user->id)
        ->update($data);

        return redirect('userProfile')->with('success', 'profile updated successfully');
   
    }

    public function editUserBio(Request $request)
    {
        $user = auth()->user();
        $data = $request->validate([
            'bio' => 'required|min:2|max:99'
        ]);

        $bioedit = DB::table('users')->where('id', $user->id)->update($data);

        return redirect()->back()->with('success', 'user bio updated successfully');

    }


    public function deleteUser(Request $request)
    { 
        $user = auth()->user();
      
        $userdelete =  DB::table('users')->where('id', $user->id)->delete();


        return redirect('/home')->with('success', 'Deleted UserProfile ');

    }

    public function viewUserProfile(Request $request, User $user)
    {
       
        return inertia('Index/viewUserProfile');
    }

    public function uploadProfile(Request $request, User $user)
        {
            
        }
    
}
