<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUsersStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('users', function (Blueprint $table) {
            //Nuevo campo Usuarios para ver el estado
            $table->string('status', 10);
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
          Schema::table('users', function (Blueprint $table) {
            //Nuevo campo Usuarios para ver el estado
            $table->dropColumn('status');
        });
    }
}
