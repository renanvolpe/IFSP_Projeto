<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     *
            'name' => ['required', 'string', 'max:255'],
            'sobrenome' => ['required', 'string', 'max:255'],
            'ddd1' => ['required', 'number', 'max:5'],
            'telefone' => ['required', 'number', 'max:20'],
            'ddd2' => ['required', 'number', 'max:5'],
            'telefonesecundario' => ['required', 'number', 'max:20'],
            'cpf' => ['required', 'string', 'max:255', 'unique:users'],
            'datanasc' => ['required', 'date', 'max:255'],
            'tiposanguineo' => ['required', 'string', 'max:255'],
            'endereco' => ['required', 'string', 'max:255'],
            'numero' => ['required', 'int', 'max:20'],
            'estado' => ['required', 'string', 'max:2'],
            'bairro' => ['required', 'string', 'max:255'],
            'cep' => ['required', 'int', 'max:15'],
            'cidade' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'confirmaremail' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
            'confirmarpassword' => ['required', 'string', 'min:3', 'confirmed'],

     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrementsvend('id');
            $table->string('name');
            $table->string('sobrenome');
            $table->number('dd1');
            $table->number('telefone');
            $table->number('dd2');
            $table->number('telefonesecundario');
            $table->string('cpf');
            $table->date('datanasc');
            $table->string('tiposanguineo');
            $table->string('endereco');
            $table->int('numero');
            $table->string('estado');
            $table->string('bairro');
            $table->string('estado');
            $table->int('cep');
            $table->string('cidade');
            $table->string('email')->unique();
            $table->string('confirmaremail')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('confirmarpassword');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
