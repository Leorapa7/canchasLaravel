<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('horario');
            $table->string('estado');
            $table->integer('codReserva');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('cancha_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cancha_id')->references('id')->on('canchas');
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
        Schema::dropIfExists('reservas');
    }
}
