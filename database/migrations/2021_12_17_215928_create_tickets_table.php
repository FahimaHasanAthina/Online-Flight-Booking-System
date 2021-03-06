<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('flightID')->unsigned();
            $table->foreign('flightID')->references('id')->on('flights');
            $table->integer('price');
            $table->integer('uID')->unsigned();
            $table->foreign('uID')->references('id')->on('users');
            $table->string('name');
            $table->string('email')->default(NULL);
            $table->string('phone')->default(NULL);
            $table->integer('seats')->default(NULL);
            $table->date('booking_date')->default(NULL);;
            $table->date('travel_date')->default(NULL);;
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
        Schema::dropIfExists('tickets');
    }
}
