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
                        <div class="col-md-3">

                            <div class="card card-primary ">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="public/img/img-decoracion/maniqui.png" alt="User profile picture">
                                    </div>

                                    <h3> <?php print_r($_SESSION['nombre']) ?></h3>

                                    <a href="<?php echo URL; ?>web/cmdDefaultLogin" class="btn btn-primary btn-block"><b>SALIR</b></a>
                                </div>
                            </div>
                            <div class="card card-primary">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Actividad</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Historial de compras</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Ajustes</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">

                                        </div>
                                        <div class="tab-pane" id="timeline">
                                            <div class="timeline timeline-inverse">
                                                <div class="time-label">
                                                    <span class="bg-danger">
                                                        10 Feb. 2014
                                                    </span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-envelope bg-primary"></i>
                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 12:05</span>
                                                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                                                        <div class="timeline-body">
                                                            Datos de compras
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <i class="fas fa-user bg-info"></i>
                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>
                                                        <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="settings">
                                            <form class="form-horizontal">
                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">recuperacion de contraseña</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>