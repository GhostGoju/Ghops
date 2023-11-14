<?php session_start();
if (!isset($_SESSION['rol'])) {
    header("Location: cmdDefaultLogin");
    exit;
}
require_once INCLUDES_TEMPLADE . "header.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>

<body class="container-general">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?>
        <div class="">
            <section class="listado-header">
                <p>Carrito</p>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-10">
                            <div class=" p-3 mb-3">
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            <img src="public/img/logos/pic.png" alt="Logo" width="70"></img> GHOPS - Digital Store
                                            <small class="float-right" span id="currentDate"></span></small>
                                        </h4>
                                    </div>
                                </div>
                            </div>


                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    <address>
                                        <?php require_once INCLUDES_TEMPLADE . "datosTienda.php"; ?></php>
                                    </address>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    <address>
                                        <strong>Datos de Usuario</strong><small> <a href="<?php echo URL; ?>web/cmdDefaultEditarPerfil"><i class='nav-icon fas fa-edit' style='color: #0F2C59; margin-left: 8px;'></i></small></a><br>
                                        <strong>Nombre: </strong><?php print_r($_SESSION['nombre'] . " " . $_SESSION['apellidos']) ?><br>
                                        <strong>Correo: </strong><?php print_r($_SESSION['email']) ?><br>
                                        <strong>Municipio: </strong><?php print_r($_SESSION['municipio'] . " - " . $_SESSION['departamento']) ?><br>
                                        <strong>Direccion: </strong><?php print_r($_SESSION['direccion']) ?><br>
                                        <strong>Telefono: </strong>+57<?php print_r($_SESSION['telefono']) ?>
                                    </address>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    <b>Factura</b><br>
                                    <b>N Orden:</b><br>
                                    <b>Fecha Facturacion:</b> <span id="currentDate"></span><br>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>N Unidades</th>
                                                <th>Producto</th>
                                                <th>Descripcion</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <p class="lead">Metodos de Pago Disponibles: </p>
                                    <img src="public/img/logos/nequi.png" alt="Nequi" width="70">
                                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                        Selecciona tu metodo de pago preferido.
                                    </p>
                                </div>
                                <div class="col-6">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th style="width:50%">Subtotal: </th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>IVA: </th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Envio:</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Total: </th>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row-compra">
                                <div class="conten-btn-compra">
                                    <button class="btn-compra">
                                        Comprar
                                        <svg class="svgIcon" viewBox="0 0 576 512">
                                            <path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>





    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?>
</body>

</html>