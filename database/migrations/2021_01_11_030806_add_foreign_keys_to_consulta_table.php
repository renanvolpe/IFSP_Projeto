<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToConsultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consulta', function (Blueprint $table) {
            $table->foreign('agenda_idAgenda', 'fk_consulta_agenda1')->references('idAgenda')->on('agenda')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consulta', function (Blueprint $table) {
            $table->dropForeign('fk_consulta_agenda1');
        });
    }
}
