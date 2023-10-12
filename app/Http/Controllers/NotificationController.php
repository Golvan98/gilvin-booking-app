<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professional;

class NotificationController extends Controller
{
    public function notification(Request $request)
    {
       


        return inertia(
            'Index/Notifications',
            [
                'notifications' => $request->user()->notifications()->paginate(10),
                'professionals' => Professional::all()
            ]
        );
    }
}
