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

Route::get('/produto/novo','ProdutosController@create')->name('inserir_produtos');
Route::post('/produto/novo','ProdutosController@store')->name('salvar_produto');
Route::get('/produtos/ver','ProdutosController@show')->name('mostrar');
Route::get('/produto/del/{id}','ProdutosController@destroy')->name('excluir_produto');
Route::get('/produto/edit/{id}','ProdutosController@edit')->name('editar_produto');
Route::post('/produto/edit/{id}','ProdutosController@update')->name('atualizar_produto');
Route::get('/welcome','ProdutosController@welcome')->name('welcome');
