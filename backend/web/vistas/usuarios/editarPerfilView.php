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
    <title>Editar-Perfil</title>
</head>

<body class="container-general">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>
        <div class="contenido-perfil">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="card card-primary">
                                <div class="card-body box-profile">
                                    <div class="text-center" style="color: #0F2C59;">
                                        <img class="profile-user-img img-fluid img-circle" src="public/img/img-decoracion/maniqui.png" alt="User profile picture">
                                        <h3> <?php print_r($_SESSION['nombre']) ?></h3>
                                    </div>
                                    <a href="<?php echo URL; ?>web/cmdDefaultPerfilUsuarios" class="btn btn-default btn-block">Perfil</a>
                                    <a href="<?php echo URL; ?>web/cmdCerrarSesion" class="btn btn-danger btn-block">Salir</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="card-perfil">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link" href="#datosPersonales" data-toggle="tab"> <i class="fa fa-user"></i> Datos Personales</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#seguridad" data-toggle="tab"> <i class="fa fa-key"></i> Contraseñas y Seguridad</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#envios" data-toggle="tab"> <i class="fa fa-truck"></i> Informacion de Envios</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#metodosPago" data-toggle="tab"> <i class="fa fa-credit-card"></i> Metodos de Pago</a></li>
                                    </ul>
                                </div>

                                <div class="content-edit-perfil">
                                    <div class="tab-content">

                                        <!-- DATOS PERSONALES -->
                                        <div class="tab-pane" id="datosPersonales">
                                            <h4>Informacion Personal</h4>
                                            <hr>
                                            <b>
                                                <P>Correo:</P>
                                            </b>
                                            <?php print_r($_SESSION['email']) ?>
                                            <hr>

                                            <b>
                                                <P>Nombre:</P>
                                            </b>
                                            <?php print_r($_SESSION['nombre']) ?> <br>
                                            <hr>

                                            <b>
                                                <P>Apellidos:</P>
                                            </b>
                                            <?php print_r($_SESSION['apellidos']) ?> <br>
                                            <hr>

                                            <b>
                                                <P>Telefono:</P>
                                            </b>
                                            <?php print_r($_SESSION['telefono']) ?><i class='nav-icon fas fa-edit' style='color:#0F2C59; margin:10px;'></i><br>
                                            <hr>
                                            <div class="lista-gen-header">
                                                <a href="#">
                                                    <button class="btn-agregar"> Actualizar
                                                        <span></span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- CAMBIAR PASSWORD -->
                                        <div class="tab-pane" id="seguridad">
                                            <input type="password" name="password" class="password-form-perfil" placeholder="Password">
                                            <div class="input-group-append">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                            <div class="lista-gen-header">
                                                <a href="#">
                                                    <button class="btn-agregar"> Actualizar
                                                        <span></span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- DATOS DE ENVIO -->
                                        <div class="tab-pane" id="envios">
                                            <h4>Datos de envio</h4>
                                            <hr>
                                            <p>Email</p>
                                            <?php print_r($_SESSION['email']) ?>
                                            <p><small><i class='nav-icon fas fa-info' style='color:#0F2C59;'></i>Este sera el correo al cual se enviara la factura digital.</small></p>
                                            <hr>
                                            <p>Pais</p>
                                            <?php print_r($_SESSION['pais']) ?>
                                            <p><small><i class='nav-icon fas fa-info' style='color:#0F2C59;'></i>Solo envios a Colombia.</small></p>
                                            <hr>
                                            <p>Municipio</p>
                                            <?php print_r($_SESSION['municipio']) ?><i class='nav-icon fas fa-edit' style='color:#0F2C59; margin:10px;'></i>
                                            <hr>
                                            <p>Direccion</p>
                                            <?php print_r($_SESSION['direccion']) ?><i class='nav-icon fas fa-edit' style='color:#0F2C59; margin:10px;'></i>
                                            <hr>
                                            <p>Telefono</p>
                                            <?php print_r($_SESSION['telefono']) ?><i class='nav-icon fas fa-edit' style='color:#0F2C59; margin:10px;'></i>
                                            <hr>
                                            <div class="lista-gen-header">
                                                <a href="#">
                                                    <button class="btn-agregar"> Actualizar
                                                        <span></span>
                                                    </button>
                                                </a>
                                            </div>
                                            <p><small><i class='nav-icon fas fa-info' style='color:#0F2C59;'></i>La informacion guardada se utilizara para futuras compras.</small></p>
                                        </div>


                                        <!-- METODOS DE PAGO -->
                                        <div class="tab-pane" id="MetodosPago">
                                            <h4>Metodos de pago almacenados</h4>
                                            <hr>
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