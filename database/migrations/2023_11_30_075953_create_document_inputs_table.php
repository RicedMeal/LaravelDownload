<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentInputsTable extends Migration
{
    public function up()
    {
        Schema::create('document_inputs', function (Blueprint $table) {
            $table->id();
            $table->string('project_title_di', 75)->unique();
            $table->string('document_title', 75);
            $table->string('purchase_request_form')->nullable()->unique();
            $table->string('rfq_form')->nullable()->unique();
            $table->string('abstract_of_canvass_form')->nullable()->unique();
            $table->string('purchase_request_file')->nullable();
            $table->string('rfq_file')->nullable();
            $table->string('abstract_of_canvass_file')->nullable();
            $table->string('materials_and_cost_estimates_file')->nullable();
            $table->string('budget_utilization_request_file')->nullable();
            $table->string('project_initiation_proposal_file')->nullable();
            $table->string('annual_procurement_plan_file')->nullable();
            $table->string('purchase_request_number_file')->nullable();
            $table->string('market_study_file')->nullable();
            $table->string('certificate_of_fund_allotment_file')->nullable();
            $table->string('csw_file')->nullable();
            $table->string('supplementary_document_file')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('document_inputs');
    }
}

