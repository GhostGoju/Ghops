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

<body class="container-general">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>
        <div class="contenido-perfil">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="card card-primary ">
                                <div class="card-body box-profile">
                                    <div class="text-center" style="color: #0F2C59;">
                                        <img class="profile-user-img img-fluid img-circle" src="public/img/img-decoracion/maniqui.png" alt="User profile picture">
                                        <h3> <?php print_r($_SESSION['nombre']) ?></h3>
                                    </div>
                                    <a href="<?php echo URL; ?>web/cmdDefaultEditarPerfil" class="btn btn-default btn-block">Editar Perfil</a>
                                    <a href="<?php echo URL; ?>web/cmdCerrarSesion" class="btn btn-danger btn-block">Salir</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="card-perfil">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link" href="#historialCompras" data-toggle="tab"> <i class="fa fa-clock"></i> Historial Compras</a></li>
                                    </ul>
                                </div>

                                <div class="content-edit-perfil">
                                    <div class="tab-content">
                                        <!-- DATOS PERSONALES -->
                                        <div class="tab-pane" id="historialCompras">
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