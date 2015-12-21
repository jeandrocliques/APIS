<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SerieExercicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('exercicio_serie', function (Blueprint $table) {
            $table->increments('id');
            $table->float('peso');
            $table->integer('repeticoes');
            $table->integer('status');
            $table->integer('order');
            $table->integer('fkid_exercicio');
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
        Schema::drop('exercicio_serie');
    }
}
