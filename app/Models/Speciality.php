<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'faculty_id',
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class,  'id');
    }
    public function cours()
    {
        return $this->belongsTo(Course::class, 'id');
    }
}
