<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller; //fazer import do controller para o jeito novo

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', ['uses'=> 'App\Http\Controllers\Controller@homepage']); //jeito antigo
Route::get('/', [Controller::class, 'homepage']); // jeito novoo

Route::get('/cadastro', [Controller::class, 'cadastrar']); // jeito novo
Route::get('/login', [Controller::class, 'fazerLogin']); // jeito novo

