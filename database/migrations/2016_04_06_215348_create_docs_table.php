<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docs', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->char('typecontract',15);
            $table->string('typeprocess',70);
            $table->string('name',70);
            $table->string('description',250);
            $table->char('format',5);
            $table->smallInteger('weight');
            $table->string('route',150);
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
        Schema::drop('docs');
    }
}
