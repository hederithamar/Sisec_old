<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterpricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprices', function (Blueprint $table) {
            //Tabla Empresas
            $table->increments('id');
            $table->string('rfc', 16)->unique();
            $table->string('name', 150);
            $table->string('legalagent', 100);
            $table->string('type', 20);
            $table->string('status', 20);
            $table->string('email', 50)->nullable();
            $table->string('address', 250)->nullable();
            $table->char('phone', 10)->nullable();
            $table->rememberToken();
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
        Schema::drop('enterprices');
    }
}
