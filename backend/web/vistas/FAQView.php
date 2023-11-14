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
    <title>FAQ</title>

<body class="container-general">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>
        <section class="listado-header">
            <p>Preguntas Frecuentes</p>
        </section>
        <div class="faq-contenedor">
            <div class="contenedor-d-faq" id="accordion">
                <div class="card-faq">
                    <a class="d-block-faq" data-toggle="collapse" href="#collapseOne">
                        <div class="card-header-faq">
                            <h5 class="card-title-faq">
                                ¿Cómo puedo hacer una compra en su sitio web?
                            </h5>
                        </div>
                    </a>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            <p>Texto prueba</p>
                        </div>
                    </div>
                </div>
                <div class="card-faq">
                    <a class="d-block-faq" data-toggle="collapse" href="#collapseTwo">
                        <div class="card-header-faq">
                            <h5 class="card-title-faq">
                                ¿Ofrecen envío internacional?
                            </h5>
                        </div>
                    </a>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p>Texto prueba</p>
                        </div>
                    </div>
                </div>
                <div class="card-faq">
                    <a class="d-block-faq" data-toggle="collapse" href="#collapseThree">
                        <div class="card-header-faq">
                            <h5 class="card-title-faq">
                                ¿Qué métodos de pago aceptan?
                            </h5>
                        </div>
                    </a>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p>Texto prueba</p>
                        </div>
                    </div>
                </div>
                <div class="card-faq">
                    <a class="d-block-faq" data-toggle="collapse" href="#collapseFour">
                        <div class="card-header-faq">
                            <h5 class="card-title-faq">
                                ¿Cuánto tiempo se tarda en procesar y enviar mi pedido?
                            </h5>
                        </div>
                    </a>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p>Texto prueba</p>
                        </div>
                    </div>
                </div>
                <div class="card-faq">
                    <a class="d-block-faq" data-toggle="collapse" href="#collapseFive">
                        <div class="card-header-faq">
                            <h5 class="card-title-faq">
                                ¿Cuál es su política de devolución?
                            </h5>
                        </div>
                    </a>
                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p>Texto prueba</p>
                        </div>
                    </div>
                </div>
                <div class="card-faq">
                    <a class="d-block-faq" data-toggle="collapse" href="#collapseSix">
                        <div class="card-header-faq">
                            <h5 class="card-title-faq">
                                ¿Ofrecen garantías en sus productos?
                            </h5>
                        </div>
                    </a>
                    <div id="collapseSix" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p>Texto prueba</p>
                        </div>
                    </div>
                </div>
                <div class="card-faq">
                    <a class="d-block-faq" data-toggle="collapse" href="#collapseSeven">
                        <div class="card-header-faq">
                            <h5 class="card-title-faq">
                                ¿Cómo protegen mis datos personales?
                            </h5>
                        </div>
                    </a>
                    <div id="collapseSeven" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p>Texto prueba</p>
                        </div>
                    </div>
                </div>
                <div class="card-faq">
                    <a class="d-block-faq" data-toggle="collapse" href="#collapseEight">
                        <div class="card-header-faq">
                            <h5 class="card-title-faq">
                                ¿Qué hacen con mi información personal?
                            </h5>
                        </div>
                    </a>
                    <div id="collapseEight" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p>Texto prueba</p>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </div>
    <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>