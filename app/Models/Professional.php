<?php

namespace App\Models;
use App\Models\Appointment;
use App\Models\User;
use App\Models\ProfessionalServices;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Professional extends Model
{
    use HasFactory;

    public function appointments(): HasMany
    {
        return $this->hasMany(\App\Models\Appointment::class, 'by_professional_id');
    }

    public function services(): HasMany
    {
        return $this->hasMany(\App\Models\ProfessionalServices::class, 'by_professional_id');
    }
    public function requests(): HasMany
    {
        return $this->hasMany(\App\Models\AppointmentRequest::class, 'by_professional_id');
    }
}
