<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answered_questions extends Model
{
    use HasFactory;
    protected $table = 'answered_question'; // Specify your table name if different from 'challenges'
    public $timestamps = false;
    protected $fillable = [
        'studentNumber', 'questionid'
    ];
}
