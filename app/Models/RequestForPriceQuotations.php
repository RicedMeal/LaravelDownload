<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestForQuotations extends Model
{
    protected $fillable = [
        'date_issued',
        'rfq_no',
        'company_name',
        'company_address',
        'company_tin',
        'business_permit_no',
        'philgeps_org_cert_no',
        'item_description',
        'quantity',
        'unit_of_issue',
        'approved_budget_contract_abc',
        'unit_price_inclusive_tax',
        'total_price_inclusive_tax',
        'compliance_with_technical_specifications',
        'remarks',
        'total',
        'payment_terms',
        'delivery_period',
        'price_quotation_validity',
        'tel_no',
        'mobile_no',
        'email',
    ];
}
