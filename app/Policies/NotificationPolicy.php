<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use Illuminate\Notifications\DatabaseNotification;
use App\Models\User;

class NotificationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
   
    public function update(User $user, DatabaseNotification $databaseNotification)
    {
        return $user->id === $databaseNotification->notifiable_id;
    }

    
}
