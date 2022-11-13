<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
   
    protected $fillable = [
        'doctor_photo', 'doctor_name', 'doctor_age', 'doctor_address', 'doctor_phone', 'doctor_gender', 'status'


    ];
}
