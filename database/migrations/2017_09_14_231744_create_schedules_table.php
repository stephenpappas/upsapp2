<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->date('reservationdate');
            $table->time('reservationtime');
            $table->date('processdate');
            $table->boolean('scheduled');
            $table->boolean('committed');
            $table->char('account_alpha', 5);
            $table->time('scheduledRTB');
            $table->time('actualRTB');
            $table->char('trailernumber');
            $table->char('group', 2);
            $table->char('run', 5);
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
        Schema::drop('schedules');
    }
}
