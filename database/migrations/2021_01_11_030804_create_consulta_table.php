<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {
            $table->integer('idConsulta', true);
            $table->tinyInteger('realizada');
            $table->string('sintoma', 245)->nullable();
            $table->string('tratamento', 245)->nullable();
            $table->string('observacao', 245)->nullable();
            $table->integer('agenda_idAgenda')->index('fk_consulta_agenda1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consulta');
    }
}
