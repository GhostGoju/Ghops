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
    <title>Carrito</title>

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

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="callout callout-info">
                                <h5><i class="fas fa-info"></i> Nota:</h5>
                                Si desea imprimir su factura puede hacerlo con el boton que se encuentra en la parte inferior.
                            </div>


                            <!-- Main content -->
                            <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            <i class="fas fa-globe"></i> <b>Gh</b>ops
                                            <small class="float-right">fecha: 1/10/2023</small>
                                        </h4>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        Empresa:
                                        <address>
                                            <strong>Ghops</strong>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            Telefono: (804) 123-5432<br>
                                            Email: info@almasaeedstudio.com
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        Inf. Usuario:
                                        <address>
                                            <strong>John Doe</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            Telefono: (555) 539-1037<br>
                                            Email: john.doe@example.com
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        <b>Factura #007612</b><br>
                                        <br>
                                        <b>ID:</b> 4F3S8J<br>
                                        <b>Pago Pendiente:</b> 1/10/2023<br>
                                        <b>Cuenta:</b> 968-34567
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <!-- <th>Acciones</th> -->
                                            <th>Cantidad</th>
                                            <th>Producto</th>
                                            <th>Descripcion</th>
                                            <th>Precio</th>
                                        </thead>

                                        <tbody>
                                            <?php
                                            // foreach ($d->data as $productos) {
                                            //     print_r("<tr>");
                                            //     print_r("<td>
                                            //     <a href='web/cmdDefaultEditarProductos/" . $productos->id . "'><i class='nav-icon fas fa-edit'></i></a>
                                            //     <a href='web/cmdEliminarProductos/" . $productos->id . "'><i class='nav-icon fas fa-trash'></i></a>
                                            //     </td>");
                                            //     print_r("<td> $productos->id</td>");
                                            //     print_r("<td> $productos->nombre</td>");
                                            //     print_r("<td> $productos->descripcion</td>");
                                            //     print_r("<td> $productos->precio</td>");
                                            //     print_r("<td> $productos->categoria</td>");
                                            //     print_r("<td> $productos->imagen</td>");
                                            //     print_r("</tr>");
                                            // }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="row">
                                    <div class="col-6">
                                        <p class="lead">Metodos de Pago:</p>
                                        <img src="./public/img/credit/visa.png" alt="Visa">
                                        <img src="./public/img/credit/mastercard.png" alt="Mastercard">
                                        <img src="./public/img/credit/american-express.png" alt="American Express">
                                        <img src="./public/img/credit/paypal2.png" alt="Paypal">
                                        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                        </p>
                                    </div>
                                </div>


                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <!-- <th>Acciones</th> -->
                                            <th>subtotal:</th>
                                            <th>IVA:</th>
                                            <th>Envio:</th>
                                            <th>Total:</th>
                                        </thead>

                                        <tbody>
                                            <?php
                                            // foreach ($d->data as $productos) {
                                            //     print_r("<tr>");
                                            //     print_r("<td>
                                            //     <a href='web/cmdDefaultEditarProductos/" . $productos->id . "'><i class='nav-icon fas fa-edit'></i></a>
                                            //     <a href='web/cmdEliminarProductos/" . $productos->id . "'><i class='nav-icon fas fa-trash'></i></a>
                                            //     </td>");
                                            //     print_r("<tr> $productos->id</td>");
                                            //     print_r("<td> $productos->nombre</td>");
                                            //     print_r("<td> $productos->descripcion</td>");
                                            //     print_r("<td> $productos->precio</td>");
                                            //     print_r("<td> $productos->categoria</td>");
                                            //     print_r("<td> $productos->imagen</td>");
                                            //     print_r("</tr>");
                                            // }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                    <div class="col-12">
                                        <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                                        <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Realizar Compra
                                        </button>
                                        <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                            <i class="fas fa-download"></i> Generar Factura
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.invoice -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>

        </div>
        <!-- /.content-wrapper -->
    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>