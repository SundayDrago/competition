<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    use HasFactory;

    protected $table = 'participants';
    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'email',
        'date_of_birth',
        'image_file',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
