<?php

use Illuminate\Support\Facades\Route;

//Home do Site
Route::get('/', function(){
    return view('index');
});
// CRUD de Produtos
Route::get('/produtos', 'ProdutoController@index');
Route::get('/produtos/criar', 'ProdutoController@testes_create');
Route::get('/produtos/atualizar', 'ProdutoController@testes_update');
Route::get('/produtos/deletar', 'ProdutoController@testes_deletar');
