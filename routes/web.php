<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Autenticacion\SeguridadController@fncMostrarLogin')->name('login');
Route::post('Autenticacion/ValidarLogin', 'Autenticacion\SeguridadController@fncValidarLoginJson')->name('ValidarLogin');
Route::post('CerrarSesion','Autenticacion\SeguridadController@fncCerrarSesion')->name('CerrarSesion');

Route::group(['namespace' => 'Administrador'], function () {
    //Rutas de Vistas
//    Route::get('Administrador', 'AdministradorController@fncAdministradorVista')->name('Administrador');
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
    Route::get('servicio/ListarProyectos', 'ProyectoController@fncListarProyectosJson');
    Route::post('servicio/RegistrarProyecto', 'ProyectoController@fncRegistrarProyectoJson');
    Route::post('servicio/EditarProyecto', 'ProyectoController@fncEditarProyectoJson');
    Route::post('servicio/ModificarProyecto', 'ProyectoController@fncModificarProyectoJson');

    Route::get('servicio/ListarMetodologias', 'MetodologiaController@fncListarMetodologiasJson');
    Route::post('servicio/RegistrarMetodologia', 'MetodologiaController@fncRegistrarMetodologiaJson');
    Route::post('servicio/EditarMetodologia', 'MetodologiaController@fncEditarMetodologiaJson');
    Route::post('servicio/ModificarMetodologia', 'MetodologiaController@fncModificarMetodologiaJson');

    Route::get('servicio/ListarFases', 'FaseController@fncListarFasesJson');
    Route::post('servicio/RegistrarFase', 'FaseController@fncRegistrarFaseJson');
    Route::post('servicio/EditarFase', 'FaseController@fncEditarFaseJson');
    Route::post('servicio/ModificarFase', 'FaseController@fncModificarFaseJson');
    Route::post('servicio/ListarFasesFiltro','FaseController@fncListarFasesFiltroJson');

    Route::get('servicio/ListarEntregables', 'EntregableController@fncListarEntregablesJson');
    Route::post('servicio/RegistrarEntregable', 'EntregableController@fncRegistrarEntregableJson');
    Route::post('servicio/EditarEntregable', 'EntregableController@fncEditarEntregableJson');
    Route::post('servicio/ModificarEntregable', 'EntregableController@fncModificarEntregableJson');
    Route::post('servicio/ListarEntregablesFaseFiltro','EntregableController@fncListarEntregableFaseFiltroJson');

    Route::get('servicio/ListarUsuarios', 'UsuarioController@fncListarUsuariosJson');
    Route::post('servicio/RegistrarUsuario', 'UsuarioController@fncRegistrarUsuarioJson');
    Route::post('servicio/EditarUsuario', 'UsuarioController@fncEditarUsuarioJson');
    Route::post('servicio/ModificarUsuario', 'UsuarioController@fncModificarUsuarioJson');

});

Route::group(['namespace' => 'Equipo'], function () {
    Route::get('Equipo', 'EquipoController@fncMostrarEquipo')->name('Equipo');
    Route::get('ProyectosEncargados','ProyectoEncargadoController@fncProyectoEncargadoVista')->name('ProyectosEncargados');
    Route::get('ProyectoEncargadoMenuDetalle/{id}','ProyectoEncargadoController@fncProyectoEncargadoMenuDetalleVista')->name('ProyectoEncargadoMenuDetalle');
    Route::get('InformacionProyectoEncargado/{id}','ProyectoEncargadoController@fncInformacionProyectoEncargadoVista')->name('ProyectoEncargado.Informacion');
    Route::get('EquipoTrabajo/{id}','UsuarioProyectoController@fncEquipoTrabajoVista')->name('EquipoTrabajo');
    Route::get('EntregableProyecto/{id}','EntregableProyectoController@fncEntregableProyectoVista')->name('EntregableProyecto');
    Route::get('TareaEntregable/{id}','TareaEntregableController@fncTareaEntregableVista')->name('TareaEntregable');
    Route::get('ComiteCambio/{id}','ComiteCambioController@fncComiteCambioVista')->name('ComiteCambio');
    Route::get('RegistrarTareaEntregable/{id}','TareaEntregableController@fncRegistrarTareaEntregableVista')->name('TareaEntregable.Registrar');
    Route::get('EditarTareaEntregable/{id}','TareaEntregableController@fncEditarTareaEntregableVista')->name('TareaEntregable.Editar');


    Route::get('servicio/ProyectosEncargados','ProyectoEncargadoController@fncProyectoEncargadoJson');
    Route::post('servicio/InformacionProyectosEncargado','ProyectoEncargadoController@fncInformacionProyectoEncargadoJson');
    Route::get('servicio/ListarMetodologiasPro', 'ProyectoEncargadoController@fncListarMetodologiasProyectoJson');
    Route::post('servicio/ListarUsuarioProyecto','UsuarioProyectoController@fncListarUsuarioProyectoJson');
    Route::post('servicio/RegistrarMetodologiaProyecto','MetodologiaProyectoController@fncRegistrarMetodologiaProyecto');
    Route::post('servicio/RegistrarUsuarioProyecto','UsuarioProyectoController@fncRegistrarUsuarioProyectoJson');
    Route::post('servicio/CambiarEstadoUsuarioProyecto','UsuarioProyectoController@fncCambiarEstadoUsuarioProyectoJson');
    Route::post('servicio/ListarFasesProyecto','EntregableProyectoController@fncListarFasesProyectoJson');
    Route::post('servicio/ListarEntregableProyecto','EntregableProyectoController@fncListarEntregableProyectoJson');
    Route::post('servicio/RegistrarEntregableProyecto','EntregableProyectoController@fncRegistrarEntregableProyectoJson');
    Route::post('servicio/CambiarEstadoEntregableProyecto','EntregableProyectoController@fncCambiarEstadoEntregableProyectoJson');
    Route::post('servicio/ListarEntregableFaseProyecto','EntregableProyectoController@fncListarEntregableFaseProyectoJson');

    Route::post('servicio/TareaEntregable','TareaEntregableController@fncListarTareaEntregableJson');
    Route::post('servicio/RegistrarTareaEntregable','TareaEntregableController@fncRegistrarTareaEntregableJson');
    Route::post('servicio/ModificarTareaEntregable','TareaEntregableController@fncModificarTareaEntregableJson');
    Route::post('servicio/ObtenerTareaEntregable','TareaEntregableController@fncObtenerTareaEntregableJson');
    Route::get('servicio/MostrarRegistrarTareaVista','TareaEntregableController@fncRegistrarTareaVista');
    Route::get('servicio/MostrarEditarTareaVista','TareaEntregableController@fncEditarTareaVista');
    Route::post('servicio/ListarTareaFiltroEntregble','TareaEntregableController@fncListarTareaFiltroEntregbleJson');
    Route::post('servicio/RegistrarRelacionTareaEntregable','TareaEntregableController@fncRegistrarRelacionTareaEntregable');
    Route::post('servicio/RegistrarAsignarTareaEntregable','TareaEntregableController@fncAsignarTareaEntregable');

    Route::post('servicio/RegistrarComiteCambio','ComiteCambioController@fncRegistrarComiteCambioProyectoJson');
    Route::post('servicio/ListarComiteCambio','ComiteCambioController@fncListarComiteCambioJson');
    Route::post('servicio/CambiarEstadoComiteCambio','ComiteCambioController@fncCambiarEstadoComiteCambioProyectoJson');
//    Route::get
});

// 'middleware' => ['auth', 'administrador'],
//' middleware' => ['auth', 'administrador'],
// 'middleware' => ['auth', 'equipo'],