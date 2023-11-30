<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CostEstimates extends Model
{
    protected $fillable = [
        'project',
        'location',
        'description',
        'quantity',
        'unit',
        'unit_cost',
        'amount',
        'total',
        'prepared_by',
        'position',
        'checked_by',
        'checked_position',
    ];
}
