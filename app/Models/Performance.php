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

    public static function getParticipantPerformanceOverYears($participantId)
    {
        return self::where('participant_id', $participantId)
            ->selectRaw('year, AVG(average_score) as average_score, SUM(total_attempts) as total_attempts')
            ->groupBy('year')
            ->orderBy('year')
            ->get();
    }
}
