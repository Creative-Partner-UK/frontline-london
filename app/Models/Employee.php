<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_designation_id',
        'address_id',
        'name',
        'date_of_birth',
        'phone_number',
        'job_title',
        'utr_number',
        'national_insurance_number',
        'remarks',
        'is_active'
    ];
}
