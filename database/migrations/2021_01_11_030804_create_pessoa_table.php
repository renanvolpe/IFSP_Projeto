<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->integer('idPessoa', true);
            $table->string('cpf', 11);
            $table->string('nome', 150);
            $table->string('email', 45);
            $table->integer('endereco_idEndereco')->index('fk_pessoa_endereco1_idx');
            $table->integer('telefone_idTelefone')->index('fk_pessoa_telefone1_idx');
            $table->integer('login_idLogin')->index('fk_pessoa_login1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa');
    }
}
