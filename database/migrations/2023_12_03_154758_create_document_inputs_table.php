<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentInputsTable extends Migration
{
    public function up()
    {
        Schema::create('document_inputs', function (Blueprint $table) {
            $table->id()->nullable();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->string('input_name')->nullable();
            $table->binary('file_content')->nullable();
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('document_inputs');
    }
}
