<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    protected $fillable = ['school_id', 'participant_id', 'year', 'average_score', 'total_attempts'];

    // Define relationships if necessary
    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

}
