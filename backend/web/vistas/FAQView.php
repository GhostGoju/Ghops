<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ</title>

    <?php require_once INCLUDES_TEMPLADE . "header.php";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    } ?></php>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <?php require_once INCLUDES_TEMPLADE . "aside.php"; ?></php>

    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12" id="accordion">
                        <div class="card card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        ¿Cómo puedo hacer una compra en su sitio web?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        ¿Ofrecen envío internacional?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        ¿Qué métodos de pago aceptan?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card card-warning card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        ¿Cuánto tiempo se tarda en procesar y enviar mi pedido?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card card-warning card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseFive">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        ¿Cuál es su política de devolución?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseFive" class="collapse" data-parent="#accordion">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card card-warning card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseSix">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        ¿Ofrecen garantías en sus productos?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseSix" class="collapse" data-parent="#accordion">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card card-danger card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseSeven">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        ¿Cómo protegen mis datos personales?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseSeven" class="collapse" data-parent="#accordion">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card card-danger card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseEight">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        ¿Qué hacen con mi información personal?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseEight" class="collapse" data-parent="#accordion">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>