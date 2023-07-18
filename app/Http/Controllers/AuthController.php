<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Professional;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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


class AuthController extends Controller
{

    public function create()
    {
        return inertia('Index/Login');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

            if(Auth::attempt($data))
            {
                $request->session()->regenerate();
                
                return redirect('/home');
            }

            else if(Auth::guard('professional')->attempt($data))
            {
                $request->session()->regenerate();
               // dd(Auth::guard('professional')->user()->email); THIS WORKS!
                return redirect('/home');
            }

            
            else 
            {
                throw ValidationException::withMessages([
                    'email' => 'Authentication failed',
                    'password' => 'incorrect password, I tried guard prof btw',
                ]);
            }
        
      /*   if (!Auth::guard('professional')->attempt($data, true))
        {
           if (!Auth::attempt($data,true )) ;
           {
            throw ValidationException::withMessages([
                'email' => 'Authentication failed',
                'password' => 'incorrect password, I tried guard prof btw',
            ]);
           } 
        } */
       

      /*  if (!Auth::attempt($request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]) ,true )) 

        {
            throw ValidationException::withMessages([
                'email' => 'Authentication failed',
                'password' => 'incorrect password',
                
            ]);
        } */

       
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');


    }
}
