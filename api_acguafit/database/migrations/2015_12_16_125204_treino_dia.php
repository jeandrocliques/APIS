<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TreinoDia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('treino_dia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_aluno');
            $table->integer('felicidade');
            $table->integer('treino');
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
        Schema::drop('treino_dia');
    }
}
