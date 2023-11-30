<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentInputs extends Model
{
    protected $fillable = [
        'document_title',
        'purchase_request_form',
        'rfq_form',
        'abstract_of_canvass_form',
        'purchase_request_file',
        'rfq_file',
        'abstract_of_canvass_file',
        'materials_and_cost_estimates_file',
        'budget_utilization_request_file',
        'project_initiation_proposal_file',
        'annual_procurement_plan_file',
        'purchase_request_number_file',
        'market_study_file',
        'certificate_of_fund_allotment_file',
        'csw_file',
        'supplementary_document_file',
    ];
}
