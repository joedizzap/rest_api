<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';
    
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'birthdate',
        'zipcode',
        'phone',
        'age',
        'gender',
        'address'
    ];
}
