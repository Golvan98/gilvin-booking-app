<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppointmentRequest extends Model
{
    use HasFactory;


    
    protected $fillable = ['request', 'request_schedule_start', 'request_schedule_end', 'by_user_id', 'by_professional_id' ];


    public function consultant() : BelongsTo
    {
        return $this->belongsTo(\App\Models\Professional::class, 'by_professional_id');
    }

    public function consultee(): BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'by_user_id');
    }
}
