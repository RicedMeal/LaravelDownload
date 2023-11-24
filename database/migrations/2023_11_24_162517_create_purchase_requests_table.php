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
        Schema::create('purchase_requests', function (Blueprint $table) {
            $table->id();
            $table->string('department', 75)->nullable(false);
            $table->string('pr_no', 17)->unique()->nullable(false);
            $table->string('date', 10)->nullable(false);
            $table->string('section', 75)->nullable();
            $table->integer('sai_no')->nullable();
            $table->integer('bus_no')->nullable();
            $table->bigInteger('item_no');
            $table->string('unit', 10)->nullable(false);
            $table->string('item_description', 100)->nullable(false);
            $table->bigInteger('quantity')->unsigned();
            $table->float('estimate_unit_cost', 11, 2)->nullable(false);
            $table->float('estimate_cost', 11, 2)->nullable(false);
            $table->float('total', 11, 2)->nullable(false);
            $table->string('delivery_duration', 20)->nullable(false);
            $table->string('purpose', 75)->nullable(false);
            $table->string('recommended_by_name', 100)->nullable(false);
            $table->string('recommended_by_designation', 100)->nullable(false);
            $table->string('approved_by_name', 100)->nullable(false);
            $table->string('approved_by_designation', 100)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_requests');
    }
};
