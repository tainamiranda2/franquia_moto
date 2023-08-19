<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/funcoes', [FuncoesController::class] , 'index');
Route::get('/vendas', [VendasController::class] , 'index');
Route::get('/funcionarios', [FuncionariosController::class] , 'index');
Route::get('/compras', [ComprasController::class] , 'index');
Route::get('/lojas', [LojasController::class] , 'index');
Route::get('/fornecedores', [FornecedoresController::class] , 'index');
Route::get('/produtos', [ProdutosController::class] , 'index');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
