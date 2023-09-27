<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->date('ano');
            $table->string('marca', 30);
            $table->string('modelo', 30);
            $table->string('preco', 30);
            
            $table->integer('loja_id');
            $table->integer('forncedor_id');
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
        Schema::dropIfExists('moto');
    }
}
