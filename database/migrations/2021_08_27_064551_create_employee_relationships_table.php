<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_relationships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employees_id');
            $table->unsignedBigInteger('offices_id');
            $table->unsignedBigInteger('positions_id');
            $table->unsignedBigInteger('classifications_id');
            $table->unsignedBigInteger('employment_statuses_id');
            $table->unsignedBigInteger('employee_images_id')->nullable();
            $table->unsignedBigInteger('file_uploads_id')->nullable();
            $table->timestamps();


            $table->foreign('employees_id')
            ->references('id')
            ->on('employees')
            ->onDelete('cascade');

            $table->foreign('offices_id')
            ->references('id')
            ->on('offices')
            ->onDelete('cascade');

            $table->foreign('positions_id')
            ->references('id')
            ->on('positions')
            ->onDelete('cascade');

            $table->foreign('classifications_id')
            ->references('id')
            ->on('classifications')
            ->onDelete('cascade');

            $table->foreign('employment_statuses_id')
            ->references('id')
            ->on('employment_statuses')
            ->onDelete('cascade');

            $table->foreign('employee_images_id')
            ->references('id')
            ->on('employee_images')
            ->onDelete('cascade');

            $table->foreign('file_uploads_id')
            ->references('id')
            ->on('file_uploads')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_relationships');
    }
}
