<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;

class NotificationSeenController extends Controller
{
    public function __invoke(DatabaseNotification $notification)

    {  
        $professional = Auth::guard('professional')->user();

        if (auth('professional')->check()) {
            // The user is authenticated using the 'professional' guard
            if ($professional->id == $notification->notifiable_id) {
            $notification->markAsRead();
            return redirect()->back()->with('success', 'Notification Mark as Read');
             }
        }
        else if (auth('web')->check()); {
        $this->authorize('update', $notification);
        $notification->markAsRead();
        return redirect()->back()->with('success', 'Notification Mark as Read');
        }
    }
}
