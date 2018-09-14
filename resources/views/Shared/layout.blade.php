<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de Gestion de la configuración de Software</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="theme-color" content="#ffffff">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="../assets/css/vendor.min.css">
    <link rel="stylesheet" href="../assets/css/elephant.min.css">
    <link rel="stylesheet" href="../assets/css/application.min.css">
</head>
<body class="layout layout-header-fixed">
<div class="layout-header">
    <div class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand navbar-brand-center" href="index-2.html">
                <img class="navbar-brand-logo" src="../assets/img/logo-inverse.svg" alt="Elephant">
            </a>
            <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse"
                    data-target="#sidenav">
                <span class="sr-only">Toggle navigation</span>
                <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
                <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
            </button>
            <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse"
                    data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="arrow-up"></span>
                <span class="ellipsis ellipsis-vertical">
              <img class="ellipsis-object" width="32" height="32" src="../assets/img/0180441436.jpg" alt="Teddy Wilson">
            </span>
            </button>
        </div>
        <div class="navbar-toggleable">
            <nav id="navbar" class="navbar-collapse collapse">
                <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true"
                        type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
                </button>
                <ul class="nav navbar-nav navbar-right">
                    <li class="visible-xs-block">
                        <h4 class="navbar-text text-center">Hi, Teddy Wilson</h4>
                    </li>
                    <li class="dropdown hidden-xs">
                        <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                            <img class="circle" width="36" height="36" src="../Imagenes/{{Auth::user()->USUfoto_usuario}}"
                                 alt="Teddy Wilson"> {{Auth::user()->USUnombre_usuario.' '.Auth::user()->USUapellido_usuario}}
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="divider"></li>
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                    <li class="visible-xs-block">
                        <a href="profile.html">
                            <span class="icon icon-user icon-lg icon-fw"></span>
                            Perfil
                        </a>
                    </li>
                    <li class="visible-xs-block">
                        <a href="login-1.html">
                            <span class="icon icon-power-off icon-lg icon-fw"></span>
                            Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="layout-main">
    <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
            <div class="custom-scrollbar">
                <nav id="sidenav" class="sidenav-collapse collapse">
                    <ul class="sidenav level-1">
                        <li class="sidenav-search">
                            <form class="sidenav-form" action="http://demo.madebytilde.com/">
                                <div class="form-group form-group-sm">
                                    <div class="input-with-icon">
                                        <input class="form-control" type="text" placeholder="Search…">
                                        <span class="icon icon-search input-icon"></span>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li class="sidenav-heading">Navigation</li>
                        <li class="sidenav-item has-subnav">
                            <a href="#" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-works">&#103;</span>
                                <span class="sidenav-label">Proyectos</span>
                            </a>
                            <ul class="sidenav level-2 collapse">
                                <li class="sidenav-heading">Proyectos</li>
                                <li><a href="{{route('Proyecto.Registrar')}}">Registro de Proyecto</a></li>
                                <li><a href="{{route('Proyecto')}}">Listar Proyectos</a></li>
                            </ul>
                        </li>
                        <li class="sidenav-item has-subnav">
                            <a href="#" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-works">&#103;</span>
                                <span class="sidenav-label">Metodologia</span>
                            </a>
                            <ul class="sidenav level-2 collapse">
                                <li class="sidenav-heading">Metodologia</li>
                                <li><a href="{{route('Metodologia.Registrar')}}">Registro de Metodologia</a></li>
                                <li><a href="{{route('Metodologia')}}">Listar Metodologia</a></li>
                            </ul>
                        </li>
                        <li class="sidenav-item has-subnav">
                            <a href="#" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-works">&#103;</span>
                                <span class="sidenav-label">Fase</span>
                            </a>
                            <ul class="sidenav level-2 collapse">
                                <li class="sidenav-heading">Fase</li>
                                <li><a href="{{route('Fase.Registrar')}}">Registro de Fase</a></li>
                                <li><a href="{{route('Fase')}}">Listar Fase</a></li>
                            </ul>
                        </li>
                        <li class="sidenav-item has-subnav">
                            <a href="#" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-works">&#103;</span>
                                <span class="sidenav-label">Entregable</span>
                            </a>
                            <ul class="sidenav level-2 collapse">
                                <li class="sidenav-heading">Entregable</li>
                                <li><a href="{{route('Entregable.Registrar')}}">Registro de Entregable</a></li>
                                <li><a href="{{route('Entregable')}}">Listar Entregable</a></li>
                            </ul>
                        </li>
                        <li class="sidenav-item has-subnav">
                            <a href="#" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-works">&#103;</span>
                                <span class="sidenav-label">Usuario</span>
                            </a>
                            <ul class="sidenav level-2 collapse">
                                <li class="sidenav-heading">Usuario</li>
                                <li><a href="{{route('Usuario.Registrar')}}">Registro de Usuario</a></li>
                                <li><a href="{{route('Usuario')}}">Listar Usuario</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="layout-content-body">
            @yield('content')
        </div>
    </div>
    <div class="layout-footer">
        <div class="layout-footer-body">
            <small class="version">Version 1.0</small>
        </div>
    </div>
</div>
<script src="../assets/js/vendor.min.js"></script>
<script src="../assets/js/elephant.min.js"></script>
<script src="../assets/js/application.min.js"></script>
{{--<script src="../assets/js/demo.min.js"></script>--}}
<script src="../assets/viewJs/general.js"></script>
<script src="http://momentjs.com/downloads/moment.min.js"></script>
@stack('Js')
</body>
</html>