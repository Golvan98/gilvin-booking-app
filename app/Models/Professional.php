<?php

namespace App\Models;
use App\Models\Appointment;
use App\Models\User;

use App\Models\ProfessionalServices;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class Professional extends Authenticatable

{
    use HasFactory;

    
    protected $guard = 'professional';

    protected $fillable = ['first_name', 'last_name', 'email', 'profession', 'password', 'profilepic',  ];
    protected $appends = ['src'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
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

    public function getSrcAttribute()
    {
        return asset("storage/{$this->profilepic}");
    }
}
