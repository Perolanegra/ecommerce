<?php
Auth::routes();
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Contém todas as rotas da aplicação.
|
*/

Route::get('/', 'HomeController@index');
// Route::view('/products', 'ProdutoController@index');
Route::view('/about', 'sobre/sobre');
Route::view('/contact', 'contato/contato');
Route::view('/categories', 'categorias/categorias');
Route::view('/gallery', 'galeria/galeria');
Route::view('/listaProduto', 'components/listaProduto');
Route::get('/products', 'ProdutoController@listar')->name('produto.listar');



Route::middleware(['auth'])->group(function () { 
    Route::get('/logar', 'AppController@login')->name('entrar');
    Route::get('/cart', 'CarrinhoController@index')->name('carrinho.listar');
    // Route::get('/products', 'ProdutoController@listar')->name('produto.listar');
    Route::post('/produtos/store', 'ProdutoController@storeProduto')->name('produto.store');
    Route::view('/cadProduto', 'produtos/cadProduto/cadProduto')->name('cadastrar.produto');
});