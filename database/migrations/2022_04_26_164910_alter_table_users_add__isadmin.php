<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsersAddIsadmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        //
          Schema::table('users', function(Blueprint $table) {
            $table->boolean('is_admin')->nullable()->after('id');
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
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('alter_table_users_add_Isadmin');
            $table->dropColumn('is_admin');
        });
    }
}
