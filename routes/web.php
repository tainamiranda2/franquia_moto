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
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\AnalisesController;
use App\Http\Controllers\MotosController;
use App\Http\Controllers\VendasController;
use App\Http\Controllers\FornecedoresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//rotar para o controller

//incial

Route::get('/','LoginController@index');


//loja
Route::get('/loja', 'LojasController@index')->name('loja');
Route::post('/loja', 'LojasController@create')->name('adicionarLoja');

//cliente
Route::get('/cliente', 'ClientesController@index')->name('cliente');

//fornecedor
Route::get('/fornecedor', 'FornecedoresController@index')->name('fornecedor');

//analise
Route::get('/analise', 'AnalisesController@index')->name('analise');

//moto
Route::get('/moto', 'MotosController@index')->name('moto');

//venda
Route::get('/venda', 'VendasController@index')->name('venda');

