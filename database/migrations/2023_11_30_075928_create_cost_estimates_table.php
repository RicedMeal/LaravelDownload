<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostEstimatesTable extends Migration
{
    public function up()
    {
        Schema::create('cost_estimates', function (Blueprint $table) {
            $table->id();
            $table->string('project', 75)->unique();
            $table->string('location', 75);
            $table->string('description', 75);
            $table->bigInteger('quantity');
            $table->string('unit', 20);
            $table->float('unit_cost', 7, 2);
            $table->float('amount', 8, 2);
            $table->string('total', 20);
            $table->string('prepared_by', 20);
            $table->string('position', 20);
            $table->string('checked_by', 20);
            $table->string('checked_position', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cost_estimates');
    }
}
