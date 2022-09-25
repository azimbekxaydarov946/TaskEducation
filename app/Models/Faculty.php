<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function speciality()
    {
        return $this->HasMany(Speciality::class,'faculty_id');
    }
}
