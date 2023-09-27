<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLojaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loja', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 30);
            $table->string('estado', 30);
            $table->string('cidade', 30);
            $table->string('bairro', 30);
            $table->string('complemento', 30);
            $table->string('rua', 30);
            $table->string('cep', 30);
            $table->string('funcionario_id', 30);
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
        Schema::dropIfExists('loja');
    }
}
