<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->integer('idAgenda', true);
            $table->dateTime('horario');
            $table->date('dia');
            $table->integer('paciente_idPaciente')->index('fk_agenda_paciente1_idx');
            $table->integer('medico_idMedico')->index('fk_agenda_medico1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda');
    }
}
