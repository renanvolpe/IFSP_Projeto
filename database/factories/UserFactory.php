<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     * Schema::create('users', function (Blueprint $table) {
     *
     *
     //tablela MIGRATION
            $table->id();
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
            //tabela MIGRATION
     * @return array
     */
    public function definition()
    {
      /* codigo original
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];*/

    return [

        'id' => $this->faker->id,
        'name' => $this->faker->name,
        'sobrenome' => $this->faker->sobrenome,
        'dd1' => $this->faker->dd1,
        'telefone' => $this->faker->telefone,
        'dd2' => $this->faker->dd2,
        'telefonesecundario' => $this->faker->telefonesecundario,
        'cpf' => $this->faker->cpf,
        'datanasc' => $this->faker->datanasc,
        'tiposanguineo' => $this->faker->tiposanguineo,
        'endereco' => $this->faker->endereco,
        'numero' => $this->faker->numero,
        'estado' => $this->faker->estado,
        'cidade' => $this->faker->cidade,
        'bairro' => $this->faker->bairro,
        'cep' => $this->faker->cep,
        'cidade' => $this->faker->cidade,
        'email' => $this->faker->unique()->safeEmail,
        'confirmarsemail' => $this->faker->unique()->safeEmail,

        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'confirmarpassword' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),

    ]

    }

}
