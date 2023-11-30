<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('purchase_requests', function (Blueprint $table) {
            $table->id();
            $table->string('department', 75);
            $table->string('pr_no', 20)->unique();
            $table->string('date', 20);
            $table->string('section', 75)->nullable();
            $table->integer('sai_no')->nullable();
            $table->integer('bus_no')->nullable();
            $table->string('unit', 20);
            $table->string('item_description', 100);
            $table->bigInteger('quantity');
            $table->double('estimate_unit_cost', 11, 2);
            $table->double('estimate_cost', 11, 2);
            $table->double('total', 11, 2);
            $table->string('delivery_duration', 20);
            $table->string('purpose', 75);
            $table->string('recommended_by_name', 25);
            $table->string('recommended_by_designation', 25);
            $table->string('approved_by_name', 25);
            $table->string('approved_by_designation', 25);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchase_requests');
    }
}
