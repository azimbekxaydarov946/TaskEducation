<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cours_id',
    ];

    public function cours()
    {
        return $this->belongsTo(Course::class,  'id');
    }
    public function student()
    {
        return $this->hasMany(Student::class, 'group_id', 'id');
    }

}
