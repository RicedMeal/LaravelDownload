<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rf_price_quotation', function (Blueprint $table) {
            $table->id();
            $table->string('date_issued', 15);
            $table->integer('rfq_no')->unique();
            $table->string('company_name', 50)->unique();
            $table->string('company_address', 100)->unique();
            $table->string('company_tin', 15);
            $table->integer('business_permit_no');
            $table->integer('philgeps_cert_no');
            $table->bigInteger('lot_item_no');
            $table->string('item_description', 75);
            $table->bigInteger('quantity');
            $table->string('unit_of_issue', 10);
            $table->float('abc', 11, 2)->unique();
            $table->string('unit_price_inclusive_tax', 20);
            $table->string('total_price_inclusive_tax', 20);
            $table->string('compliance_with_specifications', 5);
            $table->string('remarks', 20);
            $table->float('total', 11, 2);
            $table->string('payment_terms', 20);
            $table->string('delivery_period', 20);
            $table->string('price_quotation_validity', 20);
            $table->string('tel_no');
            $table->string('mobile_no');
            $table->string('email', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rf_price_quotation');
    }
};
