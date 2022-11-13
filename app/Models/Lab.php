<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
   

    protected $fillable = [
        'lab_date', 'lab_no', 'amount', 'doctor_id', 'status'
    ];
}
