<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id' => ['required', 'int', 'max:20'],
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
        ]);
    }

    /**
     * return User::create([
            'name' => $data['name'],
            'cpf' => $data['cpf'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'cpf' => $data['cpf'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
