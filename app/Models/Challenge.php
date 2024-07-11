<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $table = 'challenges';
    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'duration',
        'num_questions',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
