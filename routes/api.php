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
Route::get('/funcoes', [FuncaoController::class] , 'index');
Route::get('/vendas', [VendaController::class] , 'index');
Route::get('/funcionarios', [FuncionariosController::class] , 'index');
Route::get('/compras', [CompraController::class] , 'index');
Route::get('/lojas', [LojaController::class] , 'index');
Route::get('/fornecedores', [FornecedorController::class] , 'index');
Route::get('/produtos', [ProdutoController::class] , 'index');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
