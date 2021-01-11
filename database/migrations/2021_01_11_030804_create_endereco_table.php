<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->integer('idEndereco', true);
            $table->string('rua', 45);
            $table->string('bairro', 45);
            $table->string('complemento', 45)->nullable();
            $table->string('cidade', 20);
            $table->string('estado', 20);
            $table->string('numero', 10);
            $table->string('cep', 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco');
    }
}
