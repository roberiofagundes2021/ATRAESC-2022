<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamento15DiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamento_15_dias', function (Blueprint $table) {
            $table->id();
            $table->date('dia1');
            $table->date('dia2');
            $table->date('dia3');
            $table->date('dia4');
            $table->date('dia5');
            $table->date('dia6');
            $table->date('dia7');
            $table->date('dia8');
            $table->date('dia9');
            $table->date('dia10');
            $table->date('dia11');
            $table->date('dia12');
            $table->date('dia13');
            $table->date('dia14');
            $table->date('dia15');

            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');

             $table->unsignedBigInteger('automovel_id');
            $table->foreign('automovel_id')->references('id')->on('automovels')->onDelete('cascade');

             $table->unsignedBigInteger('endereco_empresas_id')->nullable();

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
        Schema::dropIfExists('agendamento_15_dias');
    }
}
