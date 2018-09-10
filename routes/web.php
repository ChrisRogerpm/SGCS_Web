<?php

Route::get('/', function () {
    return view('welcome');
});


//Auth::routes();
Route::get('Autenticacion/login', 'Autenticacion\SeguridadController@fncMostrarLogin')->name('login');
Route::post('Autenticacion/ValidarLogin', 'Autenticacion\SeguridadController@fncValidarLoginJson')->name('ValidarLogin');
Route::post('CerrarSesion','Autenticacion\SeguridadController@fncCerrarSesion')->name('CerrarSesion');


Route::group(['middleware' => ['auth', 'administrador'], 'namespace' => 'Administrador'], function () {
    //Rutas de Vistas
    Route::get('Administrador', 'AdministradorController@fncAdministradorVista')->name('Administrador');

    Route::get('Proyecto', 'ProyectoController@fncProyectoVista')->name('Proyecto');
    Route::get('RegistrarProyecto', 'ProyectoController@fncRegistrarProyectoVista')->name('Proyecto.Registrar');
    Route::get('EditarProyecto/{id}', 'ProyectoController@fncEditarProyectoVista')->name('Proyecto.Editar');

    Route::get('Entregable', 'EntregableController@fncEntregableVista')->name('Entregable');
    Route::get('RegistrarEntregable', 'EntregableController@fncRegistrarEntregableVista')->name('Entregable.Registrar');
    Route::get('EditarEntregable/{id}', 'EntregableController@fncEditarEntregableVista')->name('Entregable.Editar');

    Route::get('Fase', 'FaseController@fncFaseVista')->name('Fase');
    Route::get('RegistrarFase', 'FaseController@fncRegistrarFaseVista')->name('Fase.Registrar');
    Route::get('EditarFase/{id}', 'FaseController@fncEditarFaseVista')->name('Fase.Editar');

    Route::get('Metodologia', 'MetodologiaController@fncMetodologiaVista')->name('Metodologia');
    Route::get('RegistrarMetodologia', 'MetodologiaController@fncRegistrarMetodologiaVista')->name('Metodologia.Registrar');
    Route::get('EditarMetodologia/{id}', 'MetodologiaController@fncEditarMetodologiaVista')->name('Metodologia.Editar');

    Route::get('Usuario', 'UsuarioController@fncUsuarioVista')->name('Usuario');
    Route::get('RegistrarUsuario', 'UsuarioController@fncRegistrarUsuarioVista')->name('Usuario.Registrar');
    Route::get('EditarUsuario/{id}', 'UsuarioController@fncEditarUsuarioVista')->name('Usuario.Editar');


    //Servicios Administrador
    Route::get('servicio/ListarProyectos', 'ProyectoController@fncListarProyectosJson')->name('ListarProyectos');
    Route::post('servicio/RegistrarProyecto', 'ProyectoController@fncRegistrarProyectoJson')->name('RegistrarProyecto');
    Route::post('servicio/EditarProyecto', 'ProyectoController@fncEditarProyectoJson')->name('EditarProyecto');
    Route::post('servicio/ModificarProyecto', 'ProyectoController@fncModificarProyectoJson')->name('ModificarProyecto');

    Route::get('servicio/ListarMetodologias', 'MetodologiaController@fncListarMetodologiasJson')->name('ListarMetodologias');
    Route::post('servicio/RegistrarMetodologia', 'MetodologiaController@fncRegistrarMetodologiaJson')->name('RegistrarMetodologia');
    Route::post('servicio/EditarMetodologia', 'MetodologiaController@fncEditarMetodologiaJson')->name('EditarMetodologia');
    Route::post('servicio/ModificarMetodologia', 'MetodologiaController@fncModificarMetodologiaJson')->name('ModificarMetodologia');

    Route::get('servicio/ListarFases', 'FaseController@fncListarFasesJson')->name('ListarFases');
    Route::post('servicio/RegistrarFase', 'FaseController@fncRegistrarFaseJson')->name('RegistrarFase');
    Route::post('servicio/EditarFase', 'FaseController@fncEditarFaseJson')->name('EditarFase');
    Route::post('servicio/ModificarFase', 'FaseController@fncModificarFaseJson')->name('ModificarFase');
    Route::post('servicio/ListarFasesFiltro','FaseController@fncListarFasesFiltroJson')->name('ListarFasesFiltro');

    Route::get('servicio/ListarEntregables', 'EntregableController@fncListarEntregablesJson')->name('ListarEntregables');
    Route::post('servicio/RegistrarEntregable', 'EntregableController@fncRegistrarEntregableJson')->name('RegistrarEntregable');
    Route::post('servicio/EditarEntregable', 'EntregableController@fncEditarEntregableJson')->name('EditarEntregable');
    Route::post('servicio/ModificarEntregable', 'EntregableController@fncModificarEntregableJson')->name('ModificarEntregable');
    Route::post('servicio/ListarEntregablesFaseFiltro','EntregableController@fncListarEntregableFaseFiltroJson')->name('ListarEntregablesFaseFiltro');

    Route::get('servicio/ListarUsuarios', 'UsuarioController@fncListarUsuariosJson')->name('ListarUsuarios');
    Route::post('servicio/RegistrarUsuario', 'UsuarioController@fncRegistrarUsuarioJson')->name('RegistrarUsuario');
    Route::post('servicio/EditarUsuario', 'UsuarioController@fncEditarUsuarioJson')->name('EditarUsuario');
    Route::post('servicio/ModificarUsuario', 'UsuarioController@fncModificarUsuarioJson')->name('ModificarUsuario');

});

Route::group(['namespace' => 'Equipo'], function () {
    Route::get('Equipo', 'EquipoController@fncMostrarEquipo')->name('Equipo');

    Route::get('servicio/ProyectosEncargados','ProyectoEncargadoController@fncProyectoEncargadoJson')->name('ProyectosEncargados');
});

// 'middleware' => ['auth', 'administrador'],
// 'middleware' => ['auth', 'equipo'],