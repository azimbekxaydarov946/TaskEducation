<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'phone',
        'address',
        'group_id',
        'user_id',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class,  'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function contract()
    {
        return $this->hasMany(Contract::class,'student_id');
    }
    public function credit()
    {
        return $this->hasMany(Credit::class, 'credit_id');
    }
    public function history()
    {
        return $this->hasMany(History::class, 'history_id');
    }
}
