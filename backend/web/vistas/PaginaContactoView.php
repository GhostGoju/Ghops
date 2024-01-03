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
    <title>Contacto</title>
</head>

<body class="container-general">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>
        <div class="">
            <div class="card-contact">
                <div class="contacto-mensaje">
                    <h1>Si tienes algna duda sobre nuestro servicio pedes consultar<a href="<?php echo URL; ?>web/cmdFAQ" class="nav-link"><b>Preguntas frecuentes</b></a>
                        <br>
                        <h4>¡O contactanos por medio de nuestras redes sociales! :)</h4>
                    </h1>
                </div>
                <div class="card-contact2">
                    <div class="col-3 text-center d-flex align-items-center justify-content-center">
                        <div class="">
                            <div class="text-center">
                                <img src="public/img/logos/pic.png" alt="Ghops Logo" class="brand-image img-" style="opacity: .8">
                            </div>
                            <h2>GH<strong>OPS</strong></h2>
                            <p class="lead mb-5">GHOPS - Digital Store<br>
                                Telefono: +57 123123123
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="redes-contacto">
                            <a href="https://www.instagram.com/ghops_ing/?hl=es-es"><img src="public/img/logos/instagram.png" alt="Ghops_ing"></a>
                        </div>
                        <div class="redes-contacto">
                            <a href="https://www.tiktok.com/@ghops_ongs?is_from_webapp=1&sender_device=pc"><img src="public/img/logos/tik-tok.png" alt="Ghops_ongs"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>