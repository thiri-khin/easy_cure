<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDegreeDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degree_doctor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('degree_id');
            $table->unsignedBigInteger('doctor_id');
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
        Schema::dropIfExists('degree_doctor');
    }
}
