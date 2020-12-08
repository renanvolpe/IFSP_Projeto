<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      /** 'name',
       /** 'email',
        'password',*/
        'id',
        'name',
        'sobrenome',
        'ddd1',
        'telefone',
        'ddd2',
        'telefonesecundario',
        'cpf',
        'datanasc',
        'tiposanguineo',
        'endereco',
        'numero',
        'estado',
        'bairro',
        'cep',
        'cidade',
        'email',
        'confirmaremail',
        'password',
        'confirmarpassword',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'confirmarpassword',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
