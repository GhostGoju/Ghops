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
                        <div class="form-contact">
                            <label for="inputName">Nombre</label>
                            <input type="text" id="inputName" class="form-control" />
                        </div>
                        <div class="form-contact">
                            <label for="inputEmail">E-Mail</label>
                            <input type="email" id="inputEmail" class="form-control" />
                        </div>
                        <div class="form-contact">
                            <label for="inputSubject">Asunto</label>
                            <input type="text" id="inputSubject" class="form-control" />
                        </div>
                        <div class="form-contact">
                            <label for="inputMessage">Mensaje</label>
                            <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="lista-gen-header">
                            <a href="#">
                                <button class="btn-agregar"> ENVIAR
                                    <span></span>
                                </button>
                            </a>
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