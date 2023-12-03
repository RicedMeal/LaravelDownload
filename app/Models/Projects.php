<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
        'project_title',
        'department_office',
        'project_description',
        'person_in_charge',
        'project_date', 
    ];
}
