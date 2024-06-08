<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;


    protected $fillable = [
        'wrkrID',
        'name',
        'surname',
        'email',
        'contact_number',
        'position',
        'sallary_per_hour',
        'date_of_birth',
        'date_of_employment',
    ];
}
