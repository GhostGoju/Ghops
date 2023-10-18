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

<!-- <?php
        echo "Rol: " . $_SESSION['rol'];
        echo "Nombre: " . $_SESSION['nombre'];
        echo "Email: " . $_SESSION['email'];
        echo "Estado: " . $_SESSION['estado'];
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once INCLUDES_TEMPLADE . "header.php"; ?>
</head>

<body class="contenido">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>

        <div class="content-wrapper">


            <section class="content-header">
                <H5>Home</H5>
            </section>

            <div class="col-8 col-sm-5 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                        Digital Strategist
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead"><b>Nicole Pearson</b></h2>
                                <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                                <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> View Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>






        </div>
        <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?></php>
    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>