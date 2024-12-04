<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
           'challengeNumber', 'question_text', 'marks'
    ];

    public function challenge()
    {
        return $this->belongsTo(Challenge::class, 'challengeNumber', 'challengeNumber');
    }

    /**
     * Get the answers for the question.
     */
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
