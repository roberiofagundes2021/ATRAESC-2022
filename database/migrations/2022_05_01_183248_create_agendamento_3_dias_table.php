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
            $table->date('dia1')->unique;
            $table->date('dia2')->unique;
            $table->date('dia3')->unique;
             $table->foreign('endereco_empresas_id')->references('id')->on('endereco_empresas');

            $table->unsignedBigInteger('automovel_id');
            $table->foreign('automovel_id')->references('id')->on('automovels')->onDelete('cascade');

            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->timestamps();

             $table->unsignedBigInteger('qtd_dias_id')->nullable()->after('id');
            $table->foreign('qtd_dias_id')->references('id')->on('qtd_dias')->onDelete('cascade');
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
