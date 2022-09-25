<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'credit_id',
        'student_id',
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class, 'id');
    }
    public function credit()
    {
        return $this->belongsTo(Credit::class,'id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class, 'id');
    }
}
