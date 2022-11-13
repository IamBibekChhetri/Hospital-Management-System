<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
   
    protected $fillable = [
        'patientphoto', 'patientname', 'patientaddress', 'patientphone', 'doctorname', 'gender', 'bloodgroup', 'problems', 'status'


    ];
}
