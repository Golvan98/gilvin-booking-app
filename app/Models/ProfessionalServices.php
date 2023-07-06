<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProfessionalServices extends Model
{
    use HasFactory;

    public function professioner() :BelongsTo
    {
        return $this->belongsTo(\App\Models\Professional::class, 'by_professional_id');
    }
}
