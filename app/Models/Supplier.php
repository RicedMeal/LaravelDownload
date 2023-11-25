<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    #suppliers
    #protected $primaryKey = 'Supplier_ID';
    protected $fillable = [
        'Supplier_ID',
        'Supplier_Name',
        'Address',
        'Tel_No',
        'Fax_No',
        'Website',
        'Contact_Person',
        'Email',
    ];
/*
    #purchase request
    protected $fillable = [
        'department',
        'pr_no',
        'date',
        'section',
        'sai_no',
        'bus_no',
        'item_no',
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

    #request for price quotation
    protected $fillable = [
        'date_issued',
        'rfq_no',
        'company_name',
        'company_address',
        'company_tin',
        'business_permit_no',
        'philgeps_cert_no',
        'lot_item_no',
        'item_description',
        'quantity',
        'unit_of_issue',
        'abc',
        'unit_price_inclusive_tax',
        'total_price_inclusive_tax',
        'compliance_with_specifications',
        'remarks',
        'total',
        'payment_terms',
        'delivery_period',
        'price_quotation_validity',
        'tel_no',
        'mobile_no',
        'email',
    ];

    #abstract of canvass
    protected $fillable = [
        'project_title',
        'approved_budget_contract',
        'end_user',
        'item_no',
        'particulars',
        'quantity',
        'unit',
        'abc',
        'supplier_company_name',
        'supplier_address',
        'supplier_contact_no',
        'unit_price_supplier',
        'amount_supplier',
        'sub_total_supplier',
        'unit_price_average',
        'amount_average',
        'sub_total_average',
    ];*/

}
