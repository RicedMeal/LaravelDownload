<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_title', 75)->unique();
            $table->string('department_office', 75);
            $table->string('project_description', 75);
            $table->string('person_in_charge', 75);
            $table->string('document_inputs')->nullable()->unique();
            $table->date('project_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
