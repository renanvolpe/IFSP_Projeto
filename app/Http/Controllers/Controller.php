<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage(){
        return view('welcome');
    }
    public function cadastrar(){
        echo "tela de cadastro";
        //return view('register');
    }
    public function fazerLogin(){
        echo "tela de cadastro";
        //return view('login');
    }
}