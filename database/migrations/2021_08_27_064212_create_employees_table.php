<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->date('employment_date');
            $table->string('employee_number');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('suffix')->nullable();
            $table->string('address');
            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();
            $table->string('emergency_contact_person')->nullable();
            $table->string('ecp_contact_number')->nullable();
            $table->string('ecp_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
