<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('automovel_id')->nullable();
            $table->foreign('automovel_id')->references('id')->on('automovels')->onDelete('cascade');

            $table->unsignedBigInteger('empresa_id')->nullable();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');

             $table->unsignedBigInteger('endereco_empresa_id')->nullable();
            $table->foreign('endereco_empresa_id')->references('id')->on('endereco_empresas')->onDelete('cascade');

              $table->unsignedBigInteger('agendamento_3_dias_id')->nullable();
            $table->foreign('agendamento_3_dias_id')->references('id')->on('agendamento_3_dias')->onDelete('cascade');

                  $table->unsignedBigInteger('agendamento_15_dias_id')->nullable();
            $table->foreign('agendamento_15_dias_id')->references('id')->on('agendamento_15_dias')->onDelete('cascade');


              $table->unsignedBigInteger('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('contratos');
    }
}
