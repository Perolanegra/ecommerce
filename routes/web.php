<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Contém todas as rotas da aplicação.
|
*/

Route::get('/', 'HomeController@index');
Route::view('/about', 'sobre/sobre');
Route::view('/contact', 'contato/contato');
Route::view('/categories', 'categorias/categorias');
Route::view('/gallery', 'galeria/galeria');
Route::view('/listaProduto', 'components/listaProduto');
Route::get('/produtos/store', 'ProdutoController@storeProduto');
Auth::routes();

Route::get('/produtos', 'ProdutoController@index')->name('entrar')->middleware('auth');