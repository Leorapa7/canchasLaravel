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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cancha','CanchaController')->middleware('auth');

Route::get('/reservas/{tipo}', 'ReservaController@getReservas')->middleware('auth');

Route::put('/eliminarCancha/{id}', 'CanchaController@eliminarCancha')->middleware('auth');

Route::put('/cargarReservas/{id}', 'CanchaController@cargarReservas')->middleware('auth');

Route::put('/reserva/{id}', 'ReservaController@reservaUsuario')->middleware('auth');

Route::put('/cancelarReserva/{id}', 'ReservaController@cancelarReserva')->middleware('auth');

Route::get('/misReservas/{userId}', 'ReservaController@getMisReservas')->middleware('auth');

Route::post('/confirmarReserva', 'ReservaController@confirmarReserva')->middleware('auth');
