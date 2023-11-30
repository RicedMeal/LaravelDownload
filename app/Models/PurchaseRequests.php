<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseRequests extends Model
{
    protected $fillable = [
        'department',
        'pr_no',
        'date',
        'section',
        'sai_no',
        'bus_no',
        'unit',
        'item_description',
        'quantity',
        'estimate_unit_cost',
        'estimate_cost',
        'total',
        'delivery_duration',
        'purpose',
        'recommended_by_name',
        'recommended_by_designation',
        'approved_by_name',
        'approved_by_designation',
    ];
}

