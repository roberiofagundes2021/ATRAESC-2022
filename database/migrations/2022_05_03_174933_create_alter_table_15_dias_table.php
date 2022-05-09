<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlterTable15DiasTable extends Migration
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
        //
         Schema::table('agendamento_15_dias', function(Blueprint $table) {
            $table->dropForeign('alter_table_3_dias');
            $table->dropColumn('qtd_dias_id');
        });
    }
}
