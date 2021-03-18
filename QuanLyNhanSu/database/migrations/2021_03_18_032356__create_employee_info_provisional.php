<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeInfoProvisional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_info_provisional', function (Blueprint $table) {
            $table->increments('provisional_id');
            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('employee_id')->on('employee');
            $table->string('employee_fullname');
            $table->integer('position_id');
            $table->string('position_fullname');
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
        Schema::dropIfExists('table');
    }
}
