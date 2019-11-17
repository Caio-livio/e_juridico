<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('naturalidade');
            $table->date('dt_nasc');
            $table->string('cpf');
            $table->string('rg');
            $table->string('org_expedidor');
            $table->string('sexo');
            $table->string('num_fixo');
            $table->string('num_cel');
            $table->string('email');
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
        Schema::dropIfExists('clientes');
    }
}
