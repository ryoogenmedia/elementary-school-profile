<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'name_school',
        'operational',
        'email_school',
        'phone',
        'slogan',
        'total_teacher',
        'total_student',
        'total_alumni',
        'total_staff',
        'about',
    ];
}
