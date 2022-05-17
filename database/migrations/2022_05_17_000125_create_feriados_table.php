<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeriadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('feriados', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('nome',60);
            $table->unsignedBigInteger('agendamento_3_dias_id');
            $table->foreign('agendamento_3_dias_id')->references('id')->on('agendamento_3_dias')->onDelete('cascade');
            
            $table->unsignedBigInteger('agendamento_15_dias_id');
            $table->foreign('agendamento_15_dias_id')->references('id')->on('agendamento_15_dias')->onDelete('cascade');
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
        Schema::dropIfExists('feriados');
    }
}
