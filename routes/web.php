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
Route::get('/', 'AppController@index'); // rota de levar p inicio
Route::view('/about', 'sobre/sobre');
Route::view('/contact', 'contato/contato');
Route::view('/categories', 'categorias/categorias');
Route::view('/gallery', 'galeria/galeria');
Route::view('/listaProduto', 'components/listaProduto');
Route::get('/products', 'ProdutoController@index')->name('produto.listar');
Route::get('/product-detail', 'ProdutoController@show')->name('produto.detalhe');
Route::get('/products-search', 'ProdutoController@findProduct')->name('produto.search');
Route::get('/verify', 'ProdutoController@verifyAuth')->name('produto.verify');

Route::group(['middleware' => 'guest'], function() {
    Route::get('unauth-login', 'AppController@guestLogin')->name('guest.login');
});

Route::middleware(['auth'])->group(function () { 
    Route::get('/entrar', 'AppController@index')->name('authenticate');
    Route::get('/cart', 'CarrinhoController@index')->name('carrinho.listar');
    Route::get('/cart-up', 'CarrinhoController@atualizar')->name('carrinho.atualizar');
    Route::post('/produtos/store', 'ProdutoController@storeProduto')->name('produto.store');
    Route::view('/cadProduto', 'produtos/cadProduto/cadProduto')->name('cadastrar.produto');
});