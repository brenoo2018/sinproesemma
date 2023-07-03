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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');;

Route::get('sindicalizado/novo', function(){
    return view('sindicalizado.form_cadastro');
})->middleware('auth');;

Route::post('sindicalizado/enviar', 'SindicalizadoController@cadastrar')->middleware('auth');;

Route::post('sindicalizado/atualizar', 'SindicalizadoController@atualizar')->middleware('auth');;

Route::post('sindicalizado/buscar', 'SindicalizadoController@buscar')->middleware('auth');;

Route::get('sindicalizado/lista', 'SindicalizadoController@index')->name('lista')->middleware('auth');;

Route::get('sindicalizado/{id}', 'SindicalizadoController@show')->middleware('auth');;

Route::get('sindicalizado/editar/{id}', 'SindicalizadoController@editar')->middleware('auth');;

Route::get('sindicalizado/apagar/{id}', 'SindicalizadoController@apagar')->middleware('auth');;

Route::get('sindicalizado/excluir/{id}', 'SindicalizadoController@excluir')->middleware('auth');;

Route::get('users/lista', 'UsersController@index')->middleware('auth');;

Route::get('users/editar', function(){
    return view('auth.edit');
})->middleware('auth');;

Route::get('users/editar/password', function(){
    return view('auth.edit_senha');
})->middleware('auth');;

Route::post('users/update', 'UsersController@update')->middleware('auth');;

Route::post('users/update_senha', 'UsersController@update_senha')->middleware('auth');;

Route::get('contatos/lista', 'ContatoController@index')->name('lista_contato')->middleware('auth');;

Route::post('contatos/enviar', 'ContatoController@cadastrar')->middleware('auth');;

Route::get('contatos/editar/{id}', 'ContatoController@show')->middleware('auth');;

Route::post('contatos/atualizar', 'ContatoController@atualizar')->middleware('auth');;

Route::get('contatos/excluir/{id}', 'ContatoController@excluir')->middleware('auth');;

Route::get('contatos/novo', function(){
    return view('contato.form_contato');
})->middleware('auth');;






