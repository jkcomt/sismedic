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
//});.

Route::get('/','Auth\LoginController@showLoginForm');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    //->middleware('guest');

Route::get('login','Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('pacientes','PacientesController');

Route::group([
   'prefix'=>'pacientes'
],function(){
    Route::post('/citas/fecha_rango','PacientesController@citasFechaRange')->name('pacientes.citasfecharange');

    //REPORTES
    Route::get('reporte/citas_paciente/{id}','PacientesController@citaspaciente')->name('pacientes.citas_paciente')
        ->middleware('permission:pacientes.citas_paciente');

    Route::get('reporte/lista','PacientesController@reporteLista')->name('pacientes.listareporte')
        ->middleware('permission:pacientes.listareporte');

    Route::get('reporte/{id}/detalle','PacientesController@reporteDetalle')->name('pacientes.reporte')
        ->middleware('permission:pacientes.reporte');

    Route::post('/paciente_ajax','PacientesController@pacienteAjax')->name('pacientes.pacienteajax');

    //CRUD PACIENTE
    Route::get('/','PacientesController@index')->name('pacientes.index')
        ->middleware('permission:pacientes.index');

    Route::get('/{id}','PacientesController@show')->name('pacientes.show')
        ->middleware('permission:pacientes.show');

    Route::get('/create','PacientesController@create')->name('pacientes.create')
        ->middleware('permission:pacientes.create');

    Route::post('/','PacientesController@store')->name('pacientes.store')
        ->middleware('permission:pacientes.create');

    Route::post('/buscar','PacientesController@search')->name('pacientes.search');

    Route::post('/delete','PacientesController@destroy')->name('pacientes.destroy')
        ->middleware('permission:pacientes.destroy');

    Route::post('/update','PacientesController@update')->name('pacientes.update')
        ->middleware('permission:pacientes.edit');

    Route::get('{id}/edit','PacientesController@edit')->name('pacientes.edit')
        ->middleware('permission:pacientes.edit');

    Route::post('/citas/store','PacientesController@storeCita')->name('pacientes.citas.store')
        ->middleware('permission:pacientes.citas.create');

    Route::get('/citas/{id}/create','PacientesController@createCita')->name('pacientes.citas.create')
        ->middleware('permission:pacientes.citas.create');

    Route::get('/citas/{id}/edit','PacientesController@editCita')->name('pacientes.citas.edit')
        ->middleware('permission:pacientes.citas.edit');

    Route::post('/citas/update','PacientesController@updateCita')->name('pacientes.citas.update')
        ->middleware('permission:pacientes.citas.edit');

    Route::get('/citas/{id}','PacientesController@pacienteCita')->name('pacientes.citas')
        ->middleware('permission:pacientes.citas');

    Route::post('/citas/buscarCita','PacientesController@searchCita')->name('pacientes.citas.buscarCita');

    Route::get('/citas/{id}/detalle_cita','PacientesController@detailsCita')->name('pacientes.citas.detailsCita')
        ->middleware('permission:pacientes.citas.detailsCita');
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

Route::group([
    'prefix'=>'distritos'
],function() {
    Route::get('/filtro','DistritosController@filtro')->name('distrito.filtro');
    Route::get('/filtrodomicilio','DistritosController@filtroDomicilio')->name('distrito.filtrodomicilio');
});


/*luis teran*/
Route::resource('tipoinstruccion','TipoInstruccionController');

Route::group(['prefix'=>'tipoinstruccion'],
    function()
    {
        Route::get('/','TipoInstruccionController@index')->name('tipoinstruccion.index')
            ->middleware('permission:tipoinstruccion.index');

        Route::post('/update','TipoInstruccionController@update')->name('tipoinstruccion.update');
        Route::post('/busqueda','TipoInstruccionController@search')->name('tipoinstruccion.buscar');//
        Route::post('/delete','TipoInstruccionController@destroy')->name('tipoinstruccion.delete');
    }
);

Route::resource('profesion','ProfesionesController');
Route::group(['prefix'=>'profesion'],
    function()
    {
        Route::get('/','ProfesionesController@index')->name('profesion.index')
            ->middleware('permission:profesion.index');

        Route::post('/update','ProfesionesController@update')->name('profesion.update');
        Route::post('/busqueda','ProfesionesController@search')->name('profesion.buscar');//
        Route::post('/delete','ProfesionesController@destroy')->name('profesion.delete');
    }

);

Route::resource('area','AreasController');
Route::group(['prefix'=>'area'],
    function()
    {
        Route::get('/','AreasController@index')->name('area.index')
            ->middleware('permission:area.index');

        Route::post('/update','AreasController@update')->name('area.update');
        Route::post('/busqueda','AreasController@search')->name('area.buscar');//
        Route::post('/delete','AreasController@destroy')->name('area.delete');
    }

);

Route::resource('contrata','ContratadoresController');

Route::group(['prefix'=>'contrata'],
    function()
    {
        Route::get('/','ContratadoresController@index')->name('contrata.index')
            ->middleware('permission:contrata.index');

        Route::post('/update','ContratadoresController@update')->name('contrata.update');
        Route::post('/busqueda','ContratadoresController@search')->name('contrata.buscar');//
        Route::post('/delete','ContratadoresController@destroy')->name('contrata.delete');
    }
);

Route::resource('lugarlabor','LugarLaboresController');
Route::group(['prefix'=>'lugarlabor'],
    function()
    {
        Route::get('/','LugarLaboresController@index')->name('lugarlabor.index')
            ->middleware('permission:lugarlabor.index');

        Route::post('/update','LugarLaboresController@update')->name('lugarlabor.update');
        Route::post('/busqueda','LugarLaboresController@search')->name('lugarlabor.buscar');//
        Route::post('/delete','LugarLaboresController@destroy')->name('lugarlabor.delete');
    }
);

Route::resource('ocupaciones','OcupacionesController');
Route::group(['prefix'=>'ocupaciones'],
    function()
    {
        Route::get('/','OcupacionesController@index')->name('ocupaciones.index')
            ->middleware('permission:ocupaciones.index');

        Route::post('/update','OcupacionesController@update')->name('ocupaciones.update');
        Route::post('/busqueda','OcupacionesController@search')->name('ocupaciones.buscar');
        Route::post('/delete','OcupacionesController@destroy')->name('ocupaciones.delete');
    }

);

Route::resource('gruposanguineo','GrupoSanguineoController');

Route::group(['prefix'=>'gruposanguineo'],
    function()
    {
        Route::get('/','GrupoSanguineoController@index')->name('gruposanguineo.index')
            ->middleware('permission:gruposanguineo.index');

        Route::post('/update','GrupoSanguineoController@update')->name('gruposanguineo.update');
        Route::post('/busqueda','GrupoSanguineoController@search')->name('gruposanguineo.buscar');
        Route::post('/delete','GrupoSanguineoController@destroy')->name('gruposanguineo.delete');
    }
);

Route::resource('altura','AlturasController');

Route::group(['prefix'=>'altura'],
    function()
    {
        Route::get('/','AlturasController@index')->name('altura.index')
            ->middleware('permission:altura.index');

        Route::post('/update','AlturasController@update')->name('altura.update');
        Route::post('/busqueda','AlturasController@search')->name('altura.buscar');
        Route::post('/delete','AlturasController@destroy')->name('altura.delete');
    }
);

Route::post('citas/busqueda_fecha','CitaController@busquedafecha')->name('citas.busquedafecha');

Route::get('citas/examenes_cliente/{var}','CitaController@examenescliente')->name('citas.examenescliente')
    ->middleware('permission:citas.examenescliente');

Route::get('citas/listareporte','CitaController@listareporte')->name('citas.listareporte')
    ->middleware('permission:citas.listareporte');

Route::get('citas/catalogo','CitaController@catalogo')->name('citas.catalogo')
    ->middleware('permission:citas.catalogo');

Route::post('citas/delete','CitaController@destroy')->name('citas.destroy')
    ->middleware('permission:citas.destroy');

Route::post('citas/buscarfecha','CitaController@searchFecha')->name('citas.searchfecha');
Route::post('citas/buscar_dni_fecha','CitaController@searchDniFecha')->name('citas.searchdnifecha');
Route::post('citas/buscar_dni','CitaController@searchdni')->name('citas.searchdni');
Route::post('citas/buscar_paciente','CitaController@busquedaPaciente')->name('citas.busquedapaciente');
Route::post('citas/buscar_paciente_fecha','CitaController@busquedaPacienteFecha')->name('citas.busquedapacientefecha');

Route::get('citas/nueva_cita','CitaController@nuevacita')->name('citas.nuevacita')
    ->middleware('permission:citas.nuevacita');

//filtrar examen modal
Route::post('citas/filtra_examen','CitaController@filtrarExamen')->name('citas.filtraexamen');

//////////CARGAR SELECTED
Route::get('/buscar_paciente','CitaController@searchPaciente')->name('citas.buscarpaciente');
/*************************************************************************************/
Route::post('citas/cita_registrar','CitaController@registrar')->name('citas.registrar')
    ->middleware('permission:citas.nuevacita');

Route::resource('citas','CitaController');
Route::group([
    'prefix'=>'citas'
],function(){
    Route::get('/','EventController@index')->name('calendario.index');
});

//  Route::get('/citas_catalogo','CitaController@catalogo')->name('citas.catalogo');

//Route::resource('configuracion','ConfiguracionController');
Route::group([
    'prefix'=>'configuracion'
],function(){
    Route::get('/','ConfiguracionController@index')->name('configuracion.index')
        ->middleware('permission:configuracion.index');
});
//Route::get('/buscar','LoteController@search')->name('lote.search');

Route::resource('cliente_cuenta','ClienteCuentaController');
Route::group([
    'prefix'=>'cliente_cuenta'
],function(){
    Route::get('/','ClienteCuentaController@index')->name('cliente_cuenta.index')
        ->middleware('permission:cliente_cuenta.index');

    Route::post('/buscar','ClienteCuentaController@search')->name('cliente_cuenta.search');
    Route::post('/delete','ClienteCuentaController@destroy')->name('cliente_cuenta.destroy');
    Route::post('/update','ClienteCuentaController@update')->name('cliente_cuenta.update');
});

Route::resource('tipo_examen','TipoExamenController');
Route::group([
    'prefix'=>'tipo_examen'
],function(){
    Route::get('/','TipoExamenController@index')->name('tipo_examen.index')
        ->middleware('permission:tipo_examen.index');

    Route::post('/buscar','TipoExamenController@search')->name('tipo_examen.search');
    Route::post('/delete','TipoExamenController@destroy')->name('tipo_examen.destroy');
    Route::post('/update','TipoExamenController@update')->name('tipo_examen.update');
    Route::post('/buscar_individal','TipoExamenController@searchListaExamen')->name('buscar_individal.update');
    Route::post('/filtro','TipoExamenController@filtroTipoExamen')->name('tipo_examen.filtro');
});

Route::resource('perfil','PerfilController');
Route::group([
    'prefix'=>'perfil'
],function(){
    Route::get('/','PerfilController@index')->name('perfil.index')
        ->middleware('permission:perfil.index');

    Route::post('/buscar','PerfilController@search')->name('perfil.search');
    Route::post('/delete','PerfilController@destroy')->name('perfil.destroy');
    Route::post('/update','PerfilController@update')->name('perfil.update');
    Route::post('/filtro','PerfilController@filtroPerfil')->name('perfil.filtro');
});

Route::resource('lista_examen','ListaExamenController');
Route::group([
    'prefix'=>'lista_examen'
],function(){
    Route::get('/','ListaExamenController@index')->name('lista_examen.index')
        ->middleware('permission:lista_examen.index');

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
    Route::get('/','CargoController@index')->name('cargo.index')
        ->middleware('permission:cargo.index');

    Route::post('/buscar','CargoController@search')->name('cargo.search');
    Route::post('/delete','CargoController@destroy')->name('cargo.destroy');
    Route::post('/update','CargoController@update')->name('cargo.update');
});

Route::resource('usuario','UsuarioController');

Route::group(['prefix'=>'usuario'],function(){
    Route::get('/','UsuarioController@index')->name('usuario.index')
        ->middleware('permission:usuario.index');

    Route::post('/buscar','UsuarioController@search')->name('usuario.search');
    Route::post('/delete','UsuarioController@destroy')->name('usuario.destroy');
    Route::post('/update','UsuarioController@update')->name('usuario.update');
    Route::get('/permisos/{id}','UsuarioController@permisos')->name('usuario.permisos');
    Route::post('/actualizar_permisos','UsuarioController@permisosUpdate')->name('usuario.updatepermisos');
});



Route::resource('personal','PersonalController');

Route::group(['prefix'=>'personal'],function(){
    Route::get('/','PersonalController@index')->name('personal.index')
        ->middleware('permission:personal.index');

    Route::post('/buscar','PersonalController@search')->name('personal.search');
    Route::post('/delete','PersonalController@destroy')->name('personal.destroy');
    Route::post('/update','PersonalController@update')->name('personal.update');
});


Route::get('/calendar',function(){
    return view('calendario.index');
});

//Route::resource('funcion_vital','FuncionVitalController');
Route::group([
   'prefix'=>'funcion_vital'
],function(){
    Route::get('reporte/lista','FuncionVitalController@listareporte')->name('funcion_vital.listareporte')
        ->middleware('permission:funcion_vital.listareporte');

    Route::get('/','FuncionVitalController@index')->name('funcion_vital.index')
        ->middleware('permission:funcion_vital.index');

    Route::get('/{id}/create','FuncionVitalController@create')->name('funcion_vital.create')
        ->middleware('permission:funcion_vital.create');

    Route::post('/','FuncionVitalController@store')->name('funcion_vital.store')
        ->middleware('permission:funcion_vital.create');

    Route::get('editar/{id}','FuncionVitalController@edit')->name('funcion_vital.edit')
        ->middleware('permission:funcion_vital.edit');

    Route::post('/update','FuncionVitalController@update')->name('funcion_vital.update')
        ->middleware('permission:funcion_vital.edit');

    Route::post('/delete','FuncionVitalController@destroy')->name('funcion_vital.destroy')
        ->middleware('permission:funcion_vital.destroy');

    Route::get('/{id}','FuncionVitalController@show')->name('funcion_vital.show')
        ->middleware('permission:funcion_vital.show');

    Route::post('/buscar','FuncionVitalController@search')->name('funcion_vital.buscar');
});


Route::get('evaluacion_medica/create/{id}', [
    'as' => 'evaluacion_medica.create',
    'uses' => 'EvaluacionMedicaController@create',
    'middleware'=>'permission:evaluacion_medica.create'
]);

Route::get('evaluacion_medica/recargar_lista_examen/{id}', [
    'as' => 'evaluacion_medica.recargarlistaexamen',
    'uses' => 'EvaluacionMedicaController@recargarListaExamenes'
]);

Route::get('/evaluacion_medica','EvaluacionMedicaController@index')->name('evaluacion_medica.index')
    ->middleware('permission:evaluacion_medica.index');

Route::get('/informe_laboratorio/{id}','EvaluacionMedicaController@informelaboratorio')->name('evaluacionmedica.informelaboratorio');
Route::get('/informe_medico_ocupacional/{id}','EvaluacionMedicaController@informemedicoocupacional')->name('evaluacionmedica.informemedicoocupacional');



Route::group([
  "prefix"=>"antecedentes"
],function(){
  Route::get('/{idpaciente}/principal','AntecedentePersonalController@principal')->name('antecedentes.principal');
  Route::post('/crear','AntecedentePersonalController@store')->name('antecedentes.create');
  Route::post('/dos/crear','AntecendeDosPersonalController@store')->name('antecedentesdos.create');
  Route::post('/tres/crear','AntecedentesOcularesController@store')->name('antecedentes.tres.create');
  Route::post('/orl/crear','AntecedentesORLController@store')->name('antecedentes.orl.create');
  Route::post('/neumologicos/crear','AntecedentesNeumologicosController@store')->name('antecedentes.neumologicos.create');
  Route::post('/ginecologicos/crear','AntecedentesGinecologicosController@store')->name('antecedentes.ginecologicos.create');
  Route::post('/quirurgicos/crear','AntecedentesQuirurgicosController@store')->name('antecedentes.quirurgicos.create');
  Route::post('/familiares/crear','AntecedentesFamiliaresController@store')->name('antecedentes.familiares.create');
  Route::post('/hospitalizacion/crear','AntperHozpitalizacionesController@store')->name('antecedentes.hospitalizacion.create');
  Route::post('/accidentes_laborales/crear','AntperAccidenteLaboralesController@store')->name('accidentes_laborales.create');
  Route::post('/accidentes_particular/crear','AntperAccidenteParticularesController@store')->name('accidentes_particular.create');
  Route::post('/ocupacionales/crear','AntperHistoriaOcupacionalesController@store')->name('ocupacionales.create');



  Route::post('/uno/actualizar','AntecedentePersonalController@update')->name('antecedentes.uno.actualizar');
  Route::post('/dos/actualizar','AntecendeDosPersonalController@update')->name('antecedentes.dos.actualizar');
  Route::post('/tres/actualizar','AntecedentesOcularesController@update')->name('antecedentes.tres.actualizar');
  Route::post('/orl/actualizar','AntecedentesORLController@update')->name('antecedentes.orl.actualizar');
  Route::post('/neumologicos/actualizar','AntecedentesNeumologicosController@update')->name('antecedentes.neumologicos.actualizar');
  Route::post('/ginecologicos/actualizar','AntecedentesGinecologicosController@update')->name('antecedentes.ginecologicos.actualizar');
  Route::post('/quirurgicos/actualizar','AntecedentesQuirurgicosController@update')->name('antecedentes.quirurgicos.actualizar');
  Route::post('/familiares/actualizar','AntperAccidenteParticularesController@update')->name('antecedentes.familiares.actualizar');
  Route::post('/hospitalizacion/actualizar','AntperHozpitalizacionesController@update')->name('antecedentes.hospitalizacion.update');
  Route::post('/accidentes_laborales/actualizar','AntperAccidenteLaboralesController@update')->name('accidentes_laborales.update');
  Route::post('/accidentes_particular/actualizar','AntperAccidenteParticularesController@update')->name('accidentes_particular.update');

});



Route::group(["prefix"=>"historia_ocupacional"],function(){
Route::get('/reporte/{id}','AntperHistoriaOcupacionalesController@reporte_antecedentes_ocupacionales')->name('historia_ocupacional.reporte');
});
//Route::resource('velocidad_sedimentacion','VelocidadSedimentacionController');
Route::group(["prefix"=>"sedimentacion"],function(){
  Route::post('/crear','VelocidadSedimentacionController@store')->name('velocidad_sedimentacion.store');
  Route::post('/actualizar','VelocidadSedimentacionController@update')->name('velocidad_sedimentacion.update');
  Route::get('/{id}/pdf','VelocidadSedimentacionController@examenes')->name('velocidad_sedimentacion.reporte');
});
//Route::resource('glucosa','GlucosaController');
Route::group(["prefix"=>"glucosa"],function(){
  Route::post('/crear','GlucosaController@store')->name('glucosa.store');
  Route::post('/actualizar','GlucosaController@update')->name('glucosa.update');
  Route::get('/{id}/pdf','GlucosaController@examenes')->name('glucosa.reporte');
});
//Route::resource('creatinina','CreatininaController');
Route::group(["prefix"=>"creatinina"],function(){
  Route::post('/crear','CreatininaController@store')->name('creatinina.store');
  Route::post('/actualizar','CreatininaController@update')->name('creatinina.update');
  Route::get('/{id}/pdf','CreatininaController@examenes')->name('creatinina.reporte');
});
//Route::resource('acido_urico','AcidoUricoController');
Route::group(["prefix"=>"acido_urico"],function(){
  Route::post('/crear','AcidoUricoController@store')->name('acido_urico.store');
  Route::post('/actualizar','AcidoUricoController@update')->name('acido_urico.update');
  Route::get('/{id}/pdf','AcidoUricoController@examenes')->name('acido_urico.reporte');
});

//Route::resource('colesterol_total','ColesterolTotalController');
Route::group(["prefix"=>"colesterol_total"],function(){
  Route::post('/crear','ColesterolTotalController@store')->name('colesterol_total.store');
  Route::post('/actualizar','ColesterolTotalController@update')->name('colesterol_total.update');
  Route::get('/{id}/pdf','ColesterolTotalController@examenes')->name('colesterol_total.reporte');
});
//Route::resource('trigliceridos','TrigliceridoController');
Route::group(["prefix"=>"trigliceridos"],function(){
  Route::post('/crear','TrigliceridoController@store')->name('trigliceridos.store');
  Route::post('/actualizar','TrigliceridoController@update')->name('trigliceridos.update');
  Route::get('/{id}/pdf','TrigliceridoController@examenes')->name('trigliceridos.reporte');
});
//Route::resource('electrocardiograma','ElectrocardiogramaController');
Route::group(["prefix"=>"electrocardiograma"],function(){
  Route::post('/crear','ElectrocardiogramaController@store')->name('electrocardiograma.store');
  Route::post('/actualizar','ElectrocardiogramaController@update')->name('electrocardiograma.update');
  Route::get('/{id}/pdf','ElectrocardiogramaController@examenes')->name('electrocardiograma.reporte');
});
//Route::resource('anexo7d','Anexo7dsController');
Route::group(["prefix"=>"anexo7d"],function(){
  Route::post('/crear','Anexo7dsController@store')->name('anexo7d.store');
  Route::post('/actualizar','Anexo7dsController@update')->name('anexo7d.update');
  Route::get('/{id}/reporte_anexo','Anexo7dsController@reporte_anexo7d')->name('anexo7d.reporte');
});

//Route::resource('colesterol_hdl','ColesterolHdlController');
Route::group(["prefix"=>"colesterol_hdl"],function(){
  Route::post('/crear','ColesterolHdlController@store')->name('colesterol_hdl.store');
  Route::post('/actualizar','ColesterolHdlController@update')->name('colesterol_hdl.update');
  Route::get('/{id}/pdf','ColesterolHdlController@examenes')->name('colesterol_hdl.reporte');
});
//Route::resource('sifilis','SifilisController');
Route::group(["prefix"=>"sifilis"],function(){
  Route::post('/crear','SifilisController@store')->name('sifilis.store');
  Route::post('/actualizar','SifilisController@update')->name('sifilis.update');
  Route::get('/{id}/pdf','SifilisController@examenes')->name('sifilis.reporte');
});


//Route::resource('colesterol_ldl','ColesterolLdlController');
Route::group(["prefix"=>"colesterol_ldl"],function(){
  Route::post('/crear','ColesterolLdlController@store')->name('colesterol_ldl.store');
  Route::post('/actualizar','ColesterolLdlController@update')->name('colesterol_ldl.update');
  Route::get('/{id}/pdf','ColesterolLdlController@examenes')->name('colesterol_ldl.reporte');
});
//Route::resource('gamma','GammaController');

Route::group(["prefix"=>"gamma"],function(){
  Route::post('/crear','GammaController@store')->name('gamma.store');
  Route::post('/actualizar','GammaController@update')->name('gamma.update');
  Route::get('/{id}/pdf','GammaController@examenes')->name('gamma.reporte');
});

Route::group(["prefix"=>"conduccion_vehicular"],function(){
  Route::post('/crear','EvaluacionConduccionVehiculosController@store')->name('conduccion_vehicular.store');
  Route::post('/actualizar','EvaluacionConduccionVehiculosController@update')->name('conduccion_vehicular.update');
  Route::get('/{id}/reporte','EvaluacionConduccionVehiculosController@reporte_certificacion_conduccion_vehicular')->name('conduccion_vehicular.reporte');
});

//Route::resource('hemograma','HemogramaController');

Route::group(["prefix"=>"hemograma"],function(){
  Route::post('/crear','HemogramaController@store')->name('hemograma.store');
  Route::post('/actualizar','HemogramaController@update')->name('hemograma.update');
  Route::get('/{id}/pdf','HemogramaController@examenes')->name('hemograma.reporte');
});

//vision
Route::group(["prefix"=>"vision"],function(){
  Route::post('/crear','VisionController@store')->name('vision.store');
  Route::post('/actualizar','VisionController@update')->name('vision.update');
});

Route::group(["prefix"=>"orina"],function(){
  Route::post('/crear','OrinaController@store')->name('orina.store');
  Route::post('/actualizar','OrinaController@update')->name('orina.update');
});

Route::group(["prefix"=>"trabajo_altura"],function(){
  Route::post('/crear','SuficienciaTrabajoAlturaController@store')->name('trabajo_altura.store');
  Route::post('/actualizar','SuficienciaTrabajoAlturaController@update')->name('trabajo_altura.update');
  Route::get('/{id}/reporte','SuficienciaTrabajoAlturaController@reporte_certificacion_suficiencia_medica')->name('trabajo_altura.reporte');
});

Route::group(["prefix"=>"apnea_suenio"],function(){
  Route::post('/crear','ApneaSueniosController@store')->name('apnea_suenio.store');
  Route::post('/actualizar','ApneaSueniosController@update')->name('apnea_suenio.update');
  Route::get('/{id}/reporte','ApneaSueniosController@reporte_apnea_suenio')->name('apnea_suenio.reporte');
});


Route::group(["prefix"=>"conductor_operador"],function(){
  Route::post('/crear','EvaluacionConductorOperadorController@store')->name('conductor_operador.store');
  Route::post('/actualizar','EvaluacionConductorOperadorController@update')->name('conductor_operador.update');
});


Route::group(["prefix"=>"cuestionario_nordico"],function(){
  Route::post('/crear','CuestionarioNordicoController@store')->name('cuestionario_nordico.store');
  Route::post('/actualizar','CuestionarioNordicoController@update')->name('cuestionario_nordico.update');
  Route::get('/reporte/{id}','CuestionarioNordicoController@reporte')->name('cuestionario_nordico.reporte');
});




Route::view('/antecedentes', 'antecedentes.index');
Route::get('/word/{id}','WordTestController@createWordDocx')->name('word.reporte');
Route::get('/interconsulta_pdf/{id}','WordTestController@interconsultapdf')->name('interconsultapdf.reporte');

Route::get('/word/{id}','WordTestController@createWordDocx')->name('word.reporte');
Route::get('/interconsulta_pdf/{id}','WordTestController@interconsultapdf')->name('interconsultapdf.reporte');

//evaluacion cognitiva
Route::group(["prefix"=>"evaluacion_cognitiva"],function(){
    Route::post('/crear','EvaluacionCognitivaController@store')->name('evaluacion_cognitiva.store');
    Route::post('/actualizar','EvaluacionCognitivaController@update')->name('evaluacion_cognitiva.update');
    Route::get('reporte/{id}','EvaluacionCognitivaController@reporte')->name('evaluacion_cognitiva.reporte');
});

//uso respiradores
Route::group(["prefix"=>"uso_respiradores"],function(){
    Route::post('/crear','UsoRespiradorController@store')->name('uso_respiradores.store');
    Route::post('/actualizar','UsoRespiradorController@update')->name('uso_respiradores.update');
    Route::get('/reporte/{id}','UsoRespiradorController@reporte_uso_respiradores')->name('uso_respiradores.reporte');
});
