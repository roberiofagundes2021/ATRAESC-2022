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
            $table->date('dia1')->unique;
            $table->date('dia2')->unique;
            $table->date('dia3')->unique;
            $table->date('dia4')->unique;
            $table->date('dia5')->unique;
            $table->date('dia6')->unique;
            $table->date('dia7')->unique;
            $table->date('dia8')->unique;
            $table->date('dia9')->unique;
            $table->date('dia10')->unique;
            $table->date('dia11')->unique;
            $table->date('dia12')->unique;
            $table->date('dia13')->unique;
            $table->date('dia14')->unique;
            $table->date('dia15')->unique;

            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');

             $table->unsignedBigInteger('automovel_id');
            $table->foreign('automovel_id')->references('id')->on('automovels')->onDelete('cascade');

             $table->unsignedBigInteger('endereco_empresas_id')->nullable()->after('id');

              $table->unsignedBigInteger('qtd_dias_id')->nullable()->after('id');
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
