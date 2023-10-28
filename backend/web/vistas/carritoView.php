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

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?>
        <div class="content-wrapper">
            <section class="listado-header">
                <p>Carrito</p>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="invoice p-3 mb-3">
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            <img src="public/img/logos/marca (4)"></img> GHOPS - Digital Store
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
                                        <?php print_r($_SESSION['email']) ?><br>
                                        <?php print_r($_SESSION['municipio']) ?><br>
                                        <?php print_r($_SESSION['direccion']) ?><br>
                                        <?php print_r($_SESSION['telefono']) ?>
                                    </address>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    <b>Factura</b><br>
                                    <b>Order ID:</b><br>
                                    <b>Fecha Facturacion:</b> <span id="currentDate"></span><br>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Cantidad</th>
                                                <th>Producto</th>
                                                <th>Serial #</th>
                                                <th>Descripcion</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Call of Duty</td>
                                                <td>455-981-221</td>
                                                <td>El snort testosterone trophy driving gloves handsome</td>
                                                <td>$64.50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <p class="lead">Metodo de Pago: </p>
                                    <img src="public/img/logos/nequi.png" alt="Nequi" width="70">
                                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                        Selecciona tu metodo de pago preferido.
                                    </p>
                                </div>

                                <div class="col-6">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th style="width:50%">Subtotal:</th>
                                                <td>$250.30</td>
                                            </tr>
                                            <tr>
                                                <th>Tax (9.3%)</th>
                                                <td>$10.34</td>
                                            </tr>
                                            <tr>
                                                <th>Shipping:</th>
                                                <td>$5.80</td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td>$265.24</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-print">
                                <div class="col-12">
                                    <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Realizar Compra
                                    </button>
                                    <!-- <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                        <i class="fas fa-download"></i> Generate PDF
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>

    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?>
</body>

</html>