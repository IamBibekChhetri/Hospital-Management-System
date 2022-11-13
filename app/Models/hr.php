<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hr extends Model
{
    public function department()
    {
        return $this->belongsTo(Departments::class);
    }
    protected $fillable = [
        'hrPhoto', 'hrName', 'hrAddress','hrSalary','hrPhone','departName_id','degination', 'status'


    ];
}
