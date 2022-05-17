<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automovels', function (Blueprint $table) {
             $table->id();
            $table->string('marca',100);
            $table->string('modelo',100);
            $table->string('cor',40);
            $table->integer('ano');
            $table->time('horario');
            $table->unsignedBigInteger('instrutor_id');
            $table->foreign('instrutor_id')->references('id')->on('instrutors')->onDelete('cascade');
            $table->string('placa',25);
            
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
        Schema::dropIfExists('automovels');
    }
}
