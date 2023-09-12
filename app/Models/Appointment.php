<?php

namespace App\Models;
use App\Models\Professional;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['appointment_status', 'by_professional_id', 'by_user_id', 'appointment_schedule_start', 'appointment_schedule_end',  'request'];
  
    public function consultant(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Professional::class, 'by_professional_id');
    }

    public function consultee(): BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'by_user_id');
    }

}



