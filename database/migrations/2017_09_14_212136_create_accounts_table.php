<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accountname');
            $table->string('alpha');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->string('notes')->nullable();
            $table->time('sun_open_time')->nullable();
            $table->time('sun_close_time')->nullable();
            $table->time('sun_gate_close_time')->nullable();
            $table->time('mon_open_time')->nullable();
            $table->time('mon_close_time')->nullable();
            $table->time('mon_gate_close_time')->nullable();
            $table->time('tue_open_time')->nullable();
            $table->time('tue_close_time')->nullable();
            $table->time('tue_gate_close_time')->nullable();     
            $table->time('wed_open_time')->nullable();
            $table->time('wed_close_time')->nullable();
            $table->time('wed_gate_close_time')->nullable();
            $table->time('thu_open_time')->nullable();
            $table->time('thu_close_time')->nullable();
            $table->time('thu_gate_close_time')->nullable();     
            $table->time('fri_open_time')->nullable();
            $table->time('fri_close_time')->nullable();
            $table->time('fri_gate_close_time')->nullable();
            $table->time('sat_open_time')->nullable();
            $table->time('sat_close_time')->nullable();
            $table->time('sat_gate_close_time')->nullable();
            $table->string('pri_contact_firstname')->nullable();
            $table->string('pri_contact_lastname')->nullable();
            $table->string('pri_contact_email')->nullable();
            $table->string('pri_contact_phone')->nullable();
            $table->string('sec_contact_firstname')->nullable();
            $table->string('sec_contact_lastname')->nullable();
            $table->string('sec_contact_email')->nullable();
            $table->string('sec_contact_phone')->nullable();
            $table->string('late_contact_firstname')->nullable();
            $table->string('late_contact_lastname')->nullable();
            $table->string('late_contact_email')->nullable();
            $table->string('late_contact_phone')->nullable();            
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
        Schema::dropIfExists('accounts');
    }
}
