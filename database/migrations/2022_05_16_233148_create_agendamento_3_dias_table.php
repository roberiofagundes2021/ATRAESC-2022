<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamento3DiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamento_3_dias', function (Blueprint $table) {
            $table->id();
            $table->date('dia1');
            $table->date('dia2');
            $table->date('dia3');
            $table->unsignedBigInteger('endereco_empresas_id');
             $table->foreign('endereco_empresas_id')->references('id')->on('endereco_empresas')->onDelete('cascade');

            $table->unsignedBigInteger('automovel_id');
            $table->foreign('automovel_id')->references('id')->on('automovels')->onDelete('cascade');

            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
           

             $table->unsignedBigInteger('qtd_dias_id')->nullable();
            $table->foreign('qtd_dias_id')->references('id')->on('qtd_dias')->onDelete('cascade');

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
        Schema::dropIfExists('agendamento_3_dias');
    }
}
