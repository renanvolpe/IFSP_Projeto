<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pessoa', function (Blueprint $table) {
            $table->foreign('endereco_idEndereco', 'fk_pessoa_endereco1')->references('idEndereco')->on('endereco')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('login_idLogin', 'fk_pessoa_login1')->references('idLogin')->on('login')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('telefone_idTelefone', 'fk_pessoa_telefone1')->references('idTelefone')->on('telefone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pessoa', function (Blueprint $table) {
            $table->dropForeign('fk_pessoa_endereco1');
            $table->dropForeign('fk_pessoa_login1');
            $table->dropForeign('fk_pessoa_telefone1');
        });
    }
}
