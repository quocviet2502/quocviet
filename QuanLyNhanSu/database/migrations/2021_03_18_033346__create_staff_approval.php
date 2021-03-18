<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffApproval extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_approval', function (Blueprint $table) {
            $table->increments('approval_id');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('role_id')->on('role');
            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('employee_id')->on('employee');
            $table->boolean('status');
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
