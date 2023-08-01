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
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Guard;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function userProfile(Request $request, User $user)
    {
        $user = auth()->user();
    
        return inertia('Index/UserProfile',
    [
        'testdata' => $user->first_name,
        'testdata' => $user->email
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

        return redirect()->back()->with('success', 'profile updated successfully');
   
    }
}
