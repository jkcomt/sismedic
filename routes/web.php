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

//Route::get('/', function () {
//    return view('auth/login');
//});

Route::get('/','Auth\LoginController@showLoginForm');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('pacientes','PacientesController');

//Route::resource('departamentos','DepartamentosController');

Route::group([
    'prefix'=>'departamentos'
],function() {
    Route::get('/filtro','DepartamentosController@filtro')->name('departamento.filtro');
    Route::get('/filtrodomicilio','DepartamentosController@filtroDomicilio')->name('departamento.filtrodomicilio');
});

Route::group([
    'prefix'=>'provincias'
],function() {
    Route::get('/filtro','ProvinciasController@filtro')->name('provincia.filtro');
    Route::get('/filtrodomicilio','ProvinciasController@filtroDomicilio')->name('provincia.filtrodomicilio');
});

//Route::get('/buscar','LoteController@search')->name('lote.search');
