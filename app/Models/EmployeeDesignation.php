<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDesignation extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'remarks'
    ];
}
