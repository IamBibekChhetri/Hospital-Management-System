<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    use HasFactory;
    protected $fillable = [
        'hospital_name', 'blood_bank', 'location', 'contact', 'blood_group', 'reg_date', 'diesease', 'status'


    ];
}
