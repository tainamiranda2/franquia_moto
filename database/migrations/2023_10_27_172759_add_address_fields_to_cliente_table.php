<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressFieldsToClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cliente', function (Blueprint $table) {
            //
            $table->string('estado', 50);
            $table->string('cidade' ,50);
            $table->string('rua', 50);
            $table->string('bairro', 50);
            $table->string('cep', 50);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente', function (Blueprint $table) {
            //
            $table->dropColumn(['estado', 'cidade', 'rua', 'bairro', 'cep']);
        });
    }
}
