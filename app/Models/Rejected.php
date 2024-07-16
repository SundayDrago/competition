<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rejected extends Model
{
    use HasFactory;
    protected $table = 'rejected';
    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'email',
        'date_of_birth',
        'studentNumber',
        'image_file',
    
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}

