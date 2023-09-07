<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lojas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 30);
            $table->date('data');
            $table->string('descricao', 50);
            $table->integer('valor_total', 30);
            $table->integer('cliente_id');
            $table->integer('funcionario_id');
            $table->integer('loja_id');
            $table->integer('moto_id');
            $table->integer('metodo_pagamento_id');
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
        Schema::dropIfExists('lojas');
    }
}
