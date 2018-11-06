<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gestion de la configuración de Software</title>

    <!-- Global stylesheets -->
    <link href="../../../../../fonts.googleapis.com/css1381.css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/colors.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/modifytcss.css">
    <!-- /global stylesheets -->

    <link rel="stylesheet" href="../assets/toastr.min.css">

    <!-- Core JS files -->
    <script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/ui/nicescroll.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/ui/drilldown.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="../assets/js/core/app.js"></script>
    <!-- /theme JS files -->

</head>

<body class="login-container">

<!-- Main navbar -->
<div class="navbar navbar-inverse bg-indigo-800">
    <div class="navbar-header">
        {{--<a class="navbar-brand" href="#"><img src="../assets/images/logo_light.png" alt=""></a>--}}
        {{--<ul class="nav navbar-nav pull-right visible-xs-block">--}}
        {{--<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>--}}
        {{--</ul>--}}
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Simple login form -->
            <form action="#">
                <div class="panel panel-body login-form border-slate-800">
                    <div class="text-center">
                        <div class="icon-object border-slate-800 text-slate-800"><i class="icon-reading"></i></div>
                        <h5 class="content-group">Ingrese a su cuenta
                            <small class="display-block text-slate-800 ">Introduzca sus credenciales a continuación</small>
                        </h5>
                    </div>
                    {{csrf_field()}}
                    <div class="form-group has-feedback has-feedback-left">
                        <input type="text" class="form-control border-slate-800 input-sm text-slate-800" id="Codigo" placeholder="Email">
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group has-feedback has-feedback-left">
                        <input type="password" class="form-control border-slate-800 input-sm text-slate-800" id="password" placeholder="Contraseña">
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-block">Iniciar Sesión <i
                                    class="icon-circle-right2 position-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="footer text-muted text-center">
    &copy; 2018. <a href="#">Gestión de la Configuración de Software</a> by <a href="#" target="_blank">Team Tree</a>
</div>

<script src="../assets/toastr.min.js"></script>
<script src="../viewJs/Autenticacion/FrmLoginJs.js"></script>

</body>
</html>
