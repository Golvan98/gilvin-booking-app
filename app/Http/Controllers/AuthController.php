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

    public function createUser()
    {
        return inertia('Index/CreateUser');
    }

    public function createProfessional()
    {
        return inertia('Index/CreateProfessional');
    }

    public function registerProfessional(Request $request)
    {
        $professional = Professional::create($request->validate(
            [
                'first_name' => 'required|min:2|max:20',
                'last_name' => 'required|min:2|max:20',
                'email' => 'required|min:2|max:40' ,
                'profession' => 'required|min:2|max:20',
                'password' => 'required|min:8|max:20|confirmed'
            ]));
        
           Auth::guard('professional')->login($professional);
           // if(Auth::guard('professional')->attempt($professional))
           // {
            return redirect()->intended('/home')->with('success', 'Professional Account Created');
           // }

            
    }



    public function registerUser(Request $request)
    {
       $user = User::create($request->validate([
            'first_name' => 'required|min:2|max:20',
            'last_name' => 'required|min:2|max:20',
            'email' => 'required|string|email|unique:users',
            'password'=> 'required|min:8|max:20|confirmed'
        ]));
        $user->password = Hash::make($user->password);
        $user->save();
        Auth::login($user);
        return redirect()->intended('/home')->with('success', 'User account created');
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
                
                return redirect()->intended('/home')->with('success', 'User Logged in Successfully');
            }

            else if(Auth::guard('professional')->attempt($data))
            {
                $request->session()->regenerate();
               // dd(Auth::guard('professional')->user()->email); THIS WORKS!
               return redirect()->intended('/home')->with('success', 'Professional Logged in Successfully');
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
        
     //  dd(Auth::guard('professional')->user()?->email); Works!


        $prof = Auth::guard('professional')->user();

    
        if($prof==null)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->intended('/home')->with('success', 'User logged out!');
        }


        if($prof!=null)

        {
            Auth::guard('professional')->logout();
     
              $request->session()->invalidate();
              $request->session()->regenerateToken();
              return redirect()->intended('/home')->with('success', 'Professional logged out!');
        }

        


      /*  if (Auth::guard('web')->check)
        {
            dd('default guard is present');
        }

        else if (Auth::guard('professional')->check)
        {
            dd('professional guard is present');
        }

        else {
            dd('well shit');
        } */

      /* if  (Auth::logout())
       {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
       }

       else if  (Auth::guard('professional')->logout())
       {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
       }

       else {
        dd('all failed');
       }
       */
    }
}
