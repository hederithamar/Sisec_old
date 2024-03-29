<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //Datos de la tabla Usuarios
            $table->increments('id');
            $table->string('id_curp')->unique();
            $table->string('name', 50);
            $table->string('firstlastname', 45);
            $table->string('secondlastname', 45);
            $table->string('email', 50)->unique();
            $table->string('zone', 7);
            $table->char('celphone', 20);
            $table->char('phone', 20)->nullable();
            $table->string('password', 60);
            $table->string('status', 10);
            //Claves foranea referencia al modelo roles
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            //Clave foranea referencia al modelo empresas
            $table->integer('enterprise_id')->unsigned();
            $table->foreign('enterprise_id')->references('id')->on('enterprises');
            //Claves foranea referencia al modelo estados
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');
            //Datos adicionales para control de datos
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
