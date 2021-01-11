<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->string('tipoSanguineo', 3);
            $table->string('sexo', 1);
            $table->dateTime('dataNascimento');
            $table->integer('idPaciente', true);
            $table->integer('pessoa_idPessoa')->index('fk_paciente_pessoa1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
