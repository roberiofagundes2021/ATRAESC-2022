<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('endereco_empresas', function (Blueprint $table) {
          $table->id();
            $table->string('pais',100);
            $table->string('estado',100);
            $table->string('cidade',100);
            $table->string('bairro');
            $table->string('rua');
            $table->integer('numero');
            $table->string('qtd_dias_agendado',100);
            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
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
        Schema::dropIfExists('endereco_empresas');
    }
}
