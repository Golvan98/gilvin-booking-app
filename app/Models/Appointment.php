<?php

namespace App\Models;
use App\Models\Professional;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    
  
    public function lecturer(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Professional::class, 'by_professional_id');
    }

}



