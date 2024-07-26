<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analytics extends Model
{
    use HasFactory;

    // Specify your table name if different from 'analytics'
    protected $table = 'analytics'; 

    // Disable the timestamps if not required
    public $timestamps = false;

    // Specify the fillable attributes
    protected $fillable = [
        'question_id',
        'answer_id',
        'entered_ans',
    ];
}
