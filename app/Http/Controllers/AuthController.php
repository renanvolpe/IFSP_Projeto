<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dashboard() {
       
       //checar se já existe usuario logado
        if(Auth::check() === true){

        //Laravel consegue identificar os Diretorios e os arquivos qdo utiliza PONTO
       // return view (view 'admin.dashboard');
    }
  }
}