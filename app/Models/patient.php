<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    protected $fillable = [
        'patient_photo', 'patient_name', 'patient_age', 'patient_address', 'patient_phone', 'patient_disease', 'doctor_id', 'problems', 'gender', 'status'


    ];
}
