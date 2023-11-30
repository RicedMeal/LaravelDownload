<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbstractOfCanvassesTable extends Migration
{
    public function up()
    {
        Schema::create('abstract_of_canvasses', function (Blueprint $table) {
            $table->id();
            $table->string('project_title', 75)->unique();
            $table->float('approved_budget_contract', 11, 2);
            $table->string('end_user', 30);
            $table->string('particulars', 75);
            $table->bigInteger('quantity');
            $table->string('unit', 10);
            $table->float('abc_in_table', 11, 2);
            $table->string('supplier_company_name', 50);
            $table->string('supplier_address', 50);
            $table->bigInteger('supplier_contact_no');
            $table->float('unit_price_each_supplier', 8, 2);
            $table->float('amount_each_supplier', 11, 2);
            $table->float('sub_total_each_supplier', 11, 2);
            $table->float('unit_price_average', 8, 2);
            $table->float('amount_average', 11, 2);
            $table->float('sub_total_average', 11, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('abstract_of_canvasses');
    }
}


