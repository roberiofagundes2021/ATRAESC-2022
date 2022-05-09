<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamentoComHabilitacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('agendamento__com__habilitacaos', function (Blueprint $table) {
            $table->id();
            $table->date('dia1');
            $table->date('dia2');
            $table->date('dia3');
            $table->unsignedBigInteger('automovel_id');
            $table->foreign('automovel_id')->references('id')->on('automovels')->onDelete('cascade');
            $table->unsignedBigInteger('agendamento_id');
            $table->foreign('agendamento_id')->references('id')->on('agendamentos')->onDelete('cascade');
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
        Schema::dropIfExists('agendamento__com__habilitacaos');
    }
}
