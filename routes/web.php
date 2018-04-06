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

Route::group([
   'prefix'=>'pacientes'
],function(){
    Route::post('/buscar','PacientesController@search')->name('pacientes.search');
    Route::post('/delete','PacientesController@destroy')->name('pacientes.destroy');
    Route::post('/update','PacientesController@update')->name('pacientes.update');
});


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

Route::resource('cliente_cuenta','ClienteCuentaController');
Route::group([
    'prefix'=>'cliente_cuenta'
],function(){
    Route::post('/buscar','ClienteCuentaController@search')->name('cliente_cuenta.search');
    Route::post('/delete','ClienteCuentaController@destroy')->name('cliente_cuenta.destroy');
    Route::post('/update','ClienteCuentaController@update')->name('cliente_cuenta.update');
});

Route::resource('tipo_examen','TipoExamenController');
Route::group([
    'prefix'=>'tipo_examen'
],function(){
    Route::post('/buscar','TipoExamenController@search')->name('tipo_examen.search');
    Route::post('/delete','TipoExamenController@destroy')->name('tipo_examen.destroy');
    Route::post('/update','TipoExamenController@update')->name('tipo_examen.update');
});

Route::resource('perfil','PerfilController');
Route::group([
    'prefix'=>'perfil'
],function(){
    Route::post('/buscar','PerfilController@search')->name('perfil.search');
    Route::post('/delete','PerfilController@destroy')->name('perfil.destroy');
    Route::post('/update','PerfilController@update')->name('perfil.update');
});

Route::resource('lista_examen','ListaExamenController');
Route::group([
    'prefix'=>'lista_examen'
],function(){
    Route::post('/buscar','ListaExamenController@search')->name('lista_examen.search');
    Route::post('/delete','ListaExamenController@destroy')->name('lista_examen.destroy');
    Route::post('/update','ListaExamenController@update')->name('lista_examen.update');
});

Route::resource('perfil_examen','PerfilExamenController');
Route::group([
    'prefix'=>'perfil_examen'
],function(){
    Route::post('/buscar','PerfilExamenController@search')->name('perfil_examen.search');
    Route::post('/delete','PerfilExamenController@dwwestroy')->name('perfil_examen.destroy');
    Route::post('/update','PerfilExamenController@update')->name('perfil_examen.update');
});