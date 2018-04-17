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
    Route::post('/citas/store','PacientesController@storeCita')->name('pacientes.citas.store');
    Route::get('/citas/{id}/create','PacientesController@createCita')->name('pacientes.citas.create');
    Route::get('/citas/{id}/edit','PacientesController@editCita')->name('pacientes.citas.edit');
    Route::post('/citas/update','PacientesController@updateCita')->name('pacientes.citas.update');
    Route::get('/citas/{id}','PacientesController@pacienteCita')->name('pacientes.citas');
    Route::post('/citas/buscarCita','PacientesController@searchCita')->name('pacientes.citas.buscarCita');
    Route::get('/citas/{id}/detalle_cita','PacientesController@detailsCita')->name('pacientes.citas.detailsCita');
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


/*luis teran*/
Route::resource('tipoinstruccion','TipoInstruccionController');

Route::group(['prefix'=>'tipoinstruccion'],
    function()
    {
        Route::post('/update','TipoInstruccionController@update')->name('tipoinstruccion.update');
        Route::post('/busqueda','TipoInstruccionController@search')->name('tipoinstruccion.buscar');//
        Route::post('/delete','TipoInstruccionController@destroy')->name('tipoinstruccion.delete');
    }
);

Route::resource('profesion','ProfesionesController');
Route::group(['prefix'=>'profesion'],
    function()
    {

        Route::post('/update','ProfesionesController@update')->name('profesion.update');
        Route::post('/busqueda','ProfesionesController@search')->name('profesion.buscar');//
        Route::post('/delete','ProfesionesController@destroy')->name('profesion.delete');
    }

);

Route::resource('area','AreasController');
Route::group(['prefix'=>'area'],
    function()
    {

        Route::post('/update','AreasController@update')->name('area.update');
        Route::post('/busqueda','AreasController@search')->name('area.buscar');//
        Route::post('/delete','AreasController@destroy')->name('area.delete');
    }

);

Route::resource('contrata','ContratadoresController');

Route::group(['prefix'=>'contrata'],
    function()
    {

        Route::post('/update','ContratadoresController@update')->name('contrata.update');
        Route::post('/busqueda','ContratadoresController@search')->name('contrata.buscar');//
        Route::post('/delete','ContratadoresController@destroy')->name('contrata.delete');
    }
);

Route::resource('lugarlabor','LugarLaboresController');
Route::group(['prefix'=>'lugarlabor'],
    function()
    {

        Route::post('/update','LugarLaboresController@update')->name('lugarlabor.update');
        Route::post('/busqueda','LugarLaboresController@search')->name('lugarlabor.buscar');//
        Route::post('/delete','LugarLaboresController@destroy')->name('lugarlabor.delete');
    }
);

Route::resource('ocupaciones','OcupacionesController');
Route::group(['prefix'=>'ocupaciones'],
    function()
    {

        Route::post('/update','OcupacionesController@update')->name('ocupaciones.update');
        Route::post('/busqueda','OcupacionesController@search')->name('ocupaciones.buscar');//
        Route::post('/delete','OcupacionesController@destroy')->name('ocupaciones.delete');
    }

);

Route::resource('gruposanguineo','GrupoSanguineoController');

Route::group(['prefix'=>'gruposanguineo'],
    function()
    {

        Route::post('/update','GrupoSanguineoController@update')->name('gruposanguineo.update');
        Route::post('/busqueda','GrupoSanguineoController@search')->name('gruposanguineo.buscar');//
        Route::post('/delete','GrupoSanguineoController@destroy')->name('gruposanguineo.delete');
    }
);

Route::resource('altura','AlturasController');

Route::group(['prefix'=>'altura'],
    function()
    {

        Route::post('/update','AlturasController@update')->name('altura.update');
        Route::post('/busqueda','AlturasController@search')->name('altura.buscar');
        Route::post('/delete','AlturasController@destroy')->name('altura.delete');
    }
);

Route::get('citas/catalogo','CitaController@catalogo')->name('citas.catalogo');
Route::post('citas/delete','CitaController@destroy')->name('citas.destroy');
Route::post('citas/buscarfecha','CitaController@searchFecha')->name('citas.searchfecha');
Route::resource('citas','CitaController');
Route::group([
    'prefix'=>'citas'
],function(){

    Route::get('/','EventController@index')->name('calendario.index');
});

//  Route::get('/citas_catalogo','CitaController@catalogo')->name('citas.catalogo');

Route::resource('configuracion','ConfiguracionController');

//Route::get('/buscar','LoteController@search')->name('lote.search');

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
    Route::post('/buscaredit','PerfilExamenController@searchedit')->name('perfil_examen.searchedit');
    Route::post('/buscar','PerfilExamenController@search')->name('perfil_examen.search');
    Route::post('/perfil/delete','PerfilExamenController@destroy')->name('perfil_examen.destroy');
    Route::post('/update','PerfilExamenController@update')->name('perfil_examen.update');
    Route::get('/perfil/{id}','PerfilExamenController@index')->name('perfil_examen.index');
});


Route::resource('cargo','CargoController');
Route::group([
    'prefix'=>'cargo'
],function(){
    Route::post('/buscar','CargoController@search')->name('cargo.search');
    Route::post('/delete','CargoController@destroy')->name('cargo.destroy');
    Route::post('/update','CargoController@update')->name('cargo.update');
});

Route::resource('usuario','UsuarioController');

Route::group(['prefix'=>'usuario'],function(){
    Route::post('/buscar','UsuarioController@search')->name('usuario.search');
    Route::post('/delete','UsuarioController@destroy')->name('usuario.destroy');
    Route::post('/update','UsuarioController@update')->name('usuario.update');
});



Route::resource('personal','PersonalController');

Route::group(['prefix'=>'personal'],function(){
    Route::post('/buscar','PersonalController@search')->name('personal.search');
    Route::post('/delete','PersonalController@destroy')->name('personal.destroy');
    Route::post('/update','PersonalController@update')->name('personal.update');
});


Route::get('/calendar',function(){
    return view('calendario.index');
});

Route::resource('funcion_vital','FuncionVitalController');
Route::group([
   'prefix'=>'funcion_vital'
],function(){
    Route::get('/{id}/create','FuncionVitalController@create')->name('funcion_vital.create');
});
