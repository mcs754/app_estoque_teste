<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/pesquisar', 'ProdutoController@pesquisar')->middleware('auth');

Route::post('/produtos/pesquisar', 'ProdutoController@pesquisar')->middleware('auth');

Route::get('/produtos/inserir', 'ProdutoController@mostrar_inserir')->middleware('auth');

Route::post('/produtos/inserir', 'ProdutoController@inserir')->middleware('auth');

Route::get('/produtos/alterar/{id}', 'ProdutoController@mostrar_alterar')->middleware('auth');

Route::post('/produtos/alterar', 'ProdutoController@alterar')->middleware('auth');

Route::get('/produtos/excluir/{id}', 'ProdutoController@excluir')->middleware('auth');

Route::get('/logout', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

