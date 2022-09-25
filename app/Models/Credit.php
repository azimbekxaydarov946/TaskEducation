<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'amount_paid',
        'credit',
        'student_id',
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class, 'id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class, 'id');
    }
}
