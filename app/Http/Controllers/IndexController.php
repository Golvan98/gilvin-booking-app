<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\AppointmentRequest;
use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\ProfessionalServices;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function index()
    {
        

        return inertia('Index/Home' ,
        [
            'data' => 'this is the content of the data'
        ]);
    }

    public function show()
    {
        return inertia('Index/Show');
    }

    public function test(Professional $professional)
    {
       
        $user = Auth::guard('professional')->user();

        $userbio = $user->bio;
        $userbio2 = $user->bio;
        $services =  ProfessionalServices::all()->whereIn('by_professional_id', $professional->id);

        $requests = AppointmentRequest::all()->whereIn('by_professional_id', $user->id);

        $consulteeids = AppointmentRequest::all()->pluck('by_user_id');

        $consultees = User::all()->whereIn('id', $consulteeids);

      

        // for each user, get all requests here and then make more queries to get the first name, connect this thread by thread

     /*   foreach ($requests as $request)
        {
            $userRequests = User::all()->whereIn('id', $request->by_user_id);

            foreach ($userRequests as $userRequest)
            {
                $consultee = $userRequest->first_name;
            }
            dd($consultee);
        } */

     
       

     //  $MotivationAnswers = App\Models\ProfessionalServices::whereIn('by_professional_id', $professional->id);


          return inertia('Index/Test',
          [
            'requests'=> $requests, 
            'consultees' => $consultees

            
        ]);
    }

    public function testEdit(Request $request)
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
