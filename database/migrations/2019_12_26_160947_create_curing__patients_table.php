<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuringPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curing__patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('patient_id');
            $table->bigInteger('room_id');
            $table->string('blood_type');
            $table->string('gurdian');
            $table->timestamp('start_date');
            $table->timestamp('end_date')->nullable();
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
        Schema::dropIfExists('curing__patients');
    }
}
