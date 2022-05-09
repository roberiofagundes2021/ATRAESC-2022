<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAgendamento15Dias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('agendamento_15_dias', function(Blueprint $table) {
            $table->unsignedBigInteger('endereco_empresas_id')->nullable()->after('id');
            $table->foreign('endereco_empresas_id')->references('id')->on('endereco_empresas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::table('agendamento_15_dias', function(Blueprint $table) {
            $table->dropForeign('alter_agendamentos_3_dias');
            $table->dropColumn('endereco_empresas_id');
        });
    }
}
