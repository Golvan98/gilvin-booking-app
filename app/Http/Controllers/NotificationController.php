<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professional;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\Guard;
use Illuminate\Pagination\Paginator;


class NotificationController extends Controller
{
    public function notification(Request $request)
    {
    
        $professionalUser = auth('professional')->user()->notifications()->paginate(10);
       dd($professionalUser);
        return inertia(
            'Index/Notifications',
            [
                'notifications' => $request->user()->notifications()->paginate(10),
                'professionals' => Professional::all()
            ]
        );
    }

    public function professionalNotificatons(Professional $professional, Request $request)
    {
        $prof = Auth::guard('professional')->user();

        return inertia(
                'Index/professionalNotificatons',
            [
                'notifications'  => $prof->notifications()->paginate(10),
                'professionals' => Professional::all() 
            ]
            );
    }
    
}
