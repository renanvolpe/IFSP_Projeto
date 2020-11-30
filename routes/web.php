<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homePacientes', [App\Http\Controllers\HomePacientesController::class, 'index'])->name('homePacientes');


//Route::get('/login', [App\Http\Controllers\AuthController::class, 'index'])->name('login');
//Route::get('/admin','AuthController@dashboard') => name('admin');

//Route::get('/admin/login','AuthController@showloginform') => name('admin.login');