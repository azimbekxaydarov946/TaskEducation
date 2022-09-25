<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'speciality_id',
    ];

    public function speciality()
    {
        return $this->belongsTo(Speciality::class, 'id');
    }

    public function group()
    {
        return $this->HasMany(Group::class,'cours_id');
    }
}
