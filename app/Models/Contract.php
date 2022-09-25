<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contract extends Model
{
    use HasFactory;

    protected $fillable  = [
        'start_date',
        'end_date',
        'contract_type',
        'contract_form',
        'pay_type',
        'pay_amount',
        'student_id'
    ];

    public function history()
    {
        return $this->HasMany(History::class,'contract_id');
    }
    public function credit()
    {
        return $this->HasMany(Credit::class,'contract_id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class,'id');
    }

}
