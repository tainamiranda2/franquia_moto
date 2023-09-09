<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao', 50);
            $table->integer('valor_total');
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
        Schema::dropIfExists('venda');
    }
}
