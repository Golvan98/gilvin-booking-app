<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use Illuminate\Notifications\DatabaseNotification;
use App\Models\User;
use App\Models\Professional;
use Illuminate\Support\Facades\Auth;
class ProfessionalNotificationPolicy
{
    public function update(User $user, DatabaseNotification $databaseNotification)
    {
        $dada = Auth::guard('professional')->user();

        dd($dada);
        return $user->id === $databaseNotification->notifiable_id;
    }

    
}
