<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrations', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('typecontract', 35);
            $table->string('ep', 70);
            $table->string('name', 70);
            $table->string('description', 250);
            $table->char('fort', 15);
            $table->smallInteger('weight');
            $table->string('route', 150);
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
        Schema::drop('integrations');
    }
}
