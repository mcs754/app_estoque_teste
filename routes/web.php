<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/pesquisar', 'ProdutoController@pesquisar');

Route::post('/produtos/pesquisar', 'ProdutoController@pesquisar');