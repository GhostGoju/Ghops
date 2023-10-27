<?php session_start();
if (!isset($_SESSION['rol'])) {
    header("Location: cmdDefaultLogin");
    exit;
}
require_once INCLUDES_TEMPLADE . "header.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?></php>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="card card-primary">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="public/img/img-decoracion/maniqui.png" alt="User profile picture">
                                    </div>
                                    <center>
                                        <h3> <?php print_r($_SESSION['nombre']) ?></h3>
                                    </center>
                                    <a href="<?php echo URL; ?>web/cmdDefaultPerfilUsuarios" class="btn btn-default btn-block">Perfil</a>
                                    <a href="<?php echo URL; ?>web/cmdCerrarSesion" class="btn btn-danger btn-block">Salir</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header p-1">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link" href="#datosPersonales" data-toggle="tab"> <i class="fa fa-user"></i> Datos Personales</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#seguridad" data-toggle="tab"> <i class="fa fa-key"></i> Contraseñas y Seguridad</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#envios" data-toggle="tab"> <i class="fa fa-truck"></i> Informacion de Envios</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane" id="datosPersonales">
                                            <p>1</p>
                                        </div>
                                        <div class="tab-pane" id="seguridad">
                                            <p>2</p>
                                        </div>
                                        <div class="tab-pane" id="envios">
                                            <p>3</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>