<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone_number',
        'birth_date',
        'weight',
        'height',
        'insurance',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
