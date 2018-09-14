<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de Gestion de la configuración de Software</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="../assets/css/vendor.min.css">
    <link rel="stylesheet" href="../assets/css/elephant.min.css">
    <link rel="stylesheet" href="../assets/css/login-2.min.css">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">--}}
</head>
<body>
<div class="login">
    <div class="login-body">
        <a class="login-brand" href="index-2.html">
            <img class="img-responsive" src="../assets/img/logo.svg" alt="Elephant">
        </a>
        <div class="login-form">
            <form data-toggle="validator">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" id="Codigo" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input class="form-control" type="password" id="password" required>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="checkbox" checked="checked">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Recuerdame</span>
                    </label>

                </div>
                <button class="btn btn-primary btn-block btnIniciarSesion" type="button">Iniciar Sesión</button>
            </form>
        </div>
    </div>
    <div class="login-footer">
        <span>Copyright © 2018 </span><span>Gestión de la Configuración de Software</span>.<span> All rights reserved.</span>
    </div>
</div>
<script src="../assets/js/vendor.min.js"></script>
<script src="../assets/js/elephant.min.js"></script>
{{--<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>--}}
<script src="../assets/viewJs/Autenticacion/FrmLoginJs.js"></script>
</body>
</html>