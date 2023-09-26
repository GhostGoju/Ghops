<?php session_start();

if (!isset($_SESSION['rol'])) {
    // El usuario no está autenticado, redirigir a la página de inicio de sesión
    header("Location: cmdDefaultLogin");
    exit;
}

// Resto del código de la página segura aquí...
require_once INCLUDES_TEMPLADE . "header.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?></php>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once INCLUDES_TEMPLADE . "header.php"; ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>

        <?php if ($_SESSION['rol'] == 1) {
            require_once INCLUDES_TEMPLADE . "aside.php";
        } ?></php>
        <div class="content-wrapper">
            <section class="content-header">
            </section>
            <section class="content">

                <!-- <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Nombre del producto
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <p class="text-muted text-sm"><b>Descripcion:</b></p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"> Color:</li>
                                        <li class="small"> Talla:</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="" alt="" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-cart-plus"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->


            </section>
        </div>
        <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?></php>
    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>