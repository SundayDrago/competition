<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participant_performance extends Model
{
    use HasFactory;
    protected $table = 'participant_performance';

    protected $fillable=['participant_id','school_id','year', 'username', 'score'. 'studentNumber'];

    public function participant(){
        return this->belongsTo(Participant::class);
    }
    public function attempt(){
        return this->belongsTo(Attempt::class);
    }
}
