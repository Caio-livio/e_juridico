<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaPreocesso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('assunto');
            $table->string('responsavel');
            $table->string('justica');
            $table->string('instancia');
            $table->string('orgao');
            $table->string('cnj');
            $table->string('pessoa1');
            $table->string('envolvimento1');
            $table->string('pessoa2');
            $table->string('envolvimento2');
            $table->string('causa');
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
        Schema::dropIfExists('processos');
    }
}
