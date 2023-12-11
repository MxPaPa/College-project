<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'college_id',
        'name',
        'father_name',
        'mother_name',
        'address',
        'phone',
        'email',
        'gender',
        'image',
    ];
}
