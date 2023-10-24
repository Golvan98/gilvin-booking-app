<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Professional;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\Guard;
use Illuminate\Pagination\Paginator;
use Illuminate\Contracts\Auth\Guard as AuthGuard;

use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function notification(Request $request)
    {
        $userid = auth()->user()->id;
     //   $professionalUser = auth('professional')->user()->notifications()->paginate(10);
     //  dd($professionalUser);
        return inertia(
            'Index/Notifications',
            [
                'notifications' => $request->user()->notifications()->paginate(10),
                'professionals' => Professional::all(),
                'Appointments'  =>  $yawa  = DB::table('appointments')->where('by_user_id', $userid)->get()
            ]
        );
    }

    public function professionalNotifications(Professional $professional, Request $request)
    {   

     
        return inertia(
                'Index/professionalNotifications',
            [
                'notifications'  => auth('professional')->user()->notifications()->paginate(10),
                'users' => User::all() 
            ]
            );
    }
    
}
