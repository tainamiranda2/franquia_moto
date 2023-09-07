<?php

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

namespace App\Http\Controllers;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LojasController;
use App\Http\Controllers\AnalisesController;
use Illuminate\Support\Facades\Route;
//rotar para o controller

//analises
Route::get('/home', 'AnalisesController@index');

Route::get('/','LoginController@index');


//loja
Route::get('/loja', 'LojasController@index')->name('loja');

Route::post('/loja', 'LojasController@create')->name('adicionarLoja');

//restante das páginas