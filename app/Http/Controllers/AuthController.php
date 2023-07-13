<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use illuminate\Contracts\Auth\user as Authenticatable;

class AuthController extends Controller
{
    public function create()
    {
        return inertia('Index/Login');
    }

    public function store(Request $request)
    {
        if (!Auth::attempt($request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]) ,true )) 

        {
            throw ValidationException::withMessages([
                'email' => 'Authentication failed',
                'password' => 'incorrect password',
                
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended('/home');
    
    }

    public function destroy()
    {

    }
}
