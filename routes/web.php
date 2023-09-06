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
use App\Http\Controllers\LojasController;
use Illuminate\Support\Facades\Route;
//rotar para o controller

Route::get('/loja', 'LojasController@index')->name('loja');

Route::post('/loja', 'LojasController@create')->name('adicionarLoja');

//restante das páginas