<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsychologistAvailability extends Model
{
    use HasFactory;

    protected $fillable = [
        'psychologist_id',
        'date',
        'start_time',
        'end_time',
        'available',
    ];

    protected $dates = ['date', 'start_time', 'end_time'];

    public function psychologist()
    {
        return $this->belongsTo(Psychologist::class);
    }
    
}


