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
        Schema::create('abstract_of_canvass', function (Blueprint $table) {
            $table->id();
            $table->string('project_title', 75)->unique();
            $table->float('approved_budget_contract', 11, 2)->unique();
            $table->string('end_user', 30);
            $table->bigInteger('item_no');
            $table->string('particulars', 75);
            $table->bigInteger('quantity');
            $table->string('unit', 10);
            $table->float('abc', 11, 2);
            $table->string('supplier_company_name', 50)->unique();
            $table->string('supplier_address', 100)->unique();
            $table->string('supplier_contact_no')->unique();
            $table->float('unit_price_supplier', 11 , 2);
            $table->float('amount_supplier', 11, 2);
            $table->float('sub_total_supplier', 11, 2);
            $table->float('unit_price_average', 11, 2);
            $table->float('amount_average', 11, 2);
            $table->float('sub_total_average', 11, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abstract_of_canvass');
    }
};
