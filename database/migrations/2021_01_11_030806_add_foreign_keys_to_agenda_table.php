<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agenda', function (Blueprint $table) {
            $table->foreign('medico_idMedico', 'fk_agenda_medico1')->references('idMedico')->on('medico')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('paciente_idPaciente', 'fk_agenda_paciente1')->references('idPaciente')->on('paciente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agenda', function (Blueprint $table) {
            $table->dropForeign('fk_agenda_medico1');
            $table->dropForeign('fk_agenda_paciente1');
        });
    }
}
