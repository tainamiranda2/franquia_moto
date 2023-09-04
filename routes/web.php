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

//rotar para o controller

Route::get('/', function () {
    return view('landing');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/loja', function () {
    return view('loja');
});
Route::get('/cliente', function () {
    return view('cliente');
});
Route::get('/moto', function () {
    return view('moto');
});
Route::get('/fornecedor', function () {
    return view('fornecedor');
});
Route::get('/venda', function () {
    return view('venda');
});
//restante das páginas