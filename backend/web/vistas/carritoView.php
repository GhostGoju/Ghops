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
                                            <i class="fas fa-globe"></i> GHOPS - Digital Store
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
                                        <strong>Datos de Usuario</strong><br>
                                        <?php print_r($_SESSION['nombre']) ?><br>
                                        San Francisco, CA 94107<br>
                                        Phone: (555) 539-1037<br>
                                        Email: <?php print_r($_SESSION['email']) ?>
                                    </address>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    <b>Invoice #007612</b><br>
                                    <br>
                                    <b>Order ID:</b> 4F3S8J<br>
                                    <b>Payment Due:</b> 2/22/2014<br>
                                    <b>Account:</b> 968-34567
                                </div>
                            </div>


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
                                            <tr>
                                                <td>1</td>
                                                <td>Need for Speed IV</td>
                                                <td>247-925-726</td>
                                                <td>Wes Anderson umami biodiesel</td>
                                                <td>$50.00</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Monsters DVD</td>
                                                <td>735-845-642</td>
                                                <td>Terry Richardson helvetica tousled street art master</td>
                                                <td>$10.70</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Grown Ups Blue Ray</td>
                                                <td>422-568-642</td>
                                                <td>Tousled lomo letterpress</td>
                                                <td>$25.99</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-6">
                                    <p class="lead">Payment Methods:</p>
                                    <img src="../../dist/img/credit/visa.png" alt="Visa">
                                    <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                                    <img src="../../dist/img/credit/american-express.png" alt="American Express">
                                    <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                                        plugg
                                        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                    </p>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                    <p class="lead">Amount Due 2/22/2014</p>

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
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                    <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                                        Payment
                                    </button>
                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                        <i class="fas fa-download"></i> Generate PDF
                                    </button>
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