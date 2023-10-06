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
        'pendingRequests' => DB::table('appointment_requests')->where('by_user_id', $user->id)->where('request_status', 'pending')->paginate(4),
        'consultants' => $consultants,
        'appointments' => DB::table('appointments')->where('by_user_id', $user->id)->whereNot('appointment_status', 'cancelled')->paginate(4),
        'requestsCount' => DB::table('appointment_requests')->where('by_user_id', $user->id)->where('request_status', 'pending')->count(),
        'appointmentsCount' => DB::table('appointments')->where('by_user_id', $user->id)->whereNot('appointment_status', 'cancelled')->count(),
        'currentUser' => $user
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

    public function viewUserProfile(Request $request, User $viewUser)
    {
       
        
        return inertia('Index/viewUserProfile',
        [
            'viewUser' => $viewUser,
            'authUser' => auth()->user()

        ]);
    }

    public function uploadUserProfilePic(Request $request, User $currentUser)
        {



            if ($request->hasFile('profilepic')) {
                $file = $request->file('profilepic');
                $path = $file->store('public');

            
            DB::table('users')->where('id', $currentUser->id)->update(['profilepic' => $path]);
            //    $file->store('C:\Users\ASUS\gilvin-booking-app\storage\app');
              //   $professional->update(['profile_pic' => 'C:\Users\ASUS\gilvin-booking-app\storage\app']);
              session()->flash('success', 'Profile Picture uploaded successfully');

              return response()->json(['message' => 'Profile Picture uploaded successfully'], 200);
      
            }

        }
    
}
