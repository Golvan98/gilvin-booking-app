<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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


class ProfessionalController extends Controller
{
    public function professionalProfile()
    {

    $user = Auth::guard('professional')->user()->id;


    $services =  ProfessionalServices::all()->whereIn('by_professional_id', $user);
        
   
        return inertia('Index/ProfessionalProfile',
        [
            'services' => $services
        ]);
    }

    public function test(Request $request)
    {
        $test = Auth::guard('professional')->user()->id;
        
        $data = $request->validate([
            
            'first_name' => 'required|min:2|max:20',
            'email' => 'required|string|email|unique:users',
            'last_name' => 'required|min:2|max:20',
            'profession' => 'required|string|max:20',
            
        ]);

        $update = DB::table('professionals')->where('id', $test)->update($data);

        return redirect()->back()->with('success', 'Profile Updated');
    }

    public function deleteProfessional(Request $request)
    {
        $user = Auth::guard('professional')->user();

        
      $yawa =  DB::table('professionals')->where('id', $user->id)->delete();

        

        return redirect('/home')->with('success', 'Profile Deleted');

    }
}
