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

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>
        <?php require_once INCLUDES_TEMPLADE . "aside.php"; ?></php>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="listado-header">
                <p>Gestion Productos</p>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="lista-gen-header">
                        <a href="web/cmdDefaultCrearProductos" class="btn-agregar">Agregar</a>
                    </div>

                    <div class="lista-gen">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>Acciones</th>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>categoria</th>
                                <th>imagen</th>
                            </thead>

                            <tbody>
                                <?php
                                foreach ($d->data as $productos) {
                                    print_r("<tr>");
                                    print_r("<td>
                                    <a href='web/cmdDefaultEditarProductos/" . $productos->id . "'><i class='nav-icon fas fa-edit'style='color:#9cd1f2; margin-right:20px;'></i></a>
                                    <a href='web/cmdDefaultPublicarProducto/" . $productos->id . "'><i class='nav-icon fas fa-share'style='color:#9BCB62; margin-right:20px;'></i></a>
                                    <a href='web/cmdEliminarProductos/" . $productos->id . "'><i class='nav-icon fas fa-trash'style='color:#CB6462;'></i></a>
                                    </td>");
                                    print_r("<td> $productos->id</td>");
                                    print_r("<td> $productos->nombre</td>");
                                    print_r("<td> $productos->descripcion</td>");
                                    print_r("<td> $productos->precio</td>");
                                    print_r("<td> $productos->categoria</td>");
                                    print_r("<td> $productos->imagen</td>");
                                    print_r("</tr>");
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </section>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>