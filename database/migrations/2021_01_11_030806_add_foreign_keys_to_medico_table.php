<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medico', function (Blueprint $table) {
            $table->foreign('pessoa_idPessoa', 'fk_medico_pessoa1')->references('idPessoa')->on('pessoa')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medico', function (Blueprint $table) {
            $table->dropForeign('fk_medico_pessoa1');
        });
    }
}
