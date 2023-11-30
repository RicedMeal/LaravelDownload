<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestForPriceQuotationsTable extends Migration
{
    public function up()
    {
        Schema::create('request_for_price_quotations', function (Blueprint $table) {
            $table->id();
            $table->string('date_issued', 8);
            $table->integer('rfq_no')->unique();
            $table->string('company_name', 50);
            $table->string('company_address', 50);
            $table->string('company_tin', 20);
            $table->integer('business_permit_no');
            $table->integer('philgeps_org_cert_no');
            $table->string('item_description', 75);
            $table->bigInteger('quantity');
            $table->string('unit_of_issue', 20);
            $table->float('approved_budget_contract_abc', 11, 2);
            $table->string('unit_price_inclusive_tax', 20);
            $table->string('total_price_inclusive_tax', 20);
            $table->string('compliance_with_technical_specifications', 5);
            $table->string('remarks', 20);
            $table->float('total', 11, 2);
            $table->string('payment_terms', 20);
            $table->string('delivery_period', 20);
            $table->string('price_quotation_validity', 20);
            $table->string('tel_no', 10);
            $table->bigInteger('mobile_no');
            $table->string('email', 25);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('request_for_price_quotations');
    }
}

