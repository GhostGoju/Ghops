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
        <div class="h-100">
            <!-- Content Header (Page header) -->
            <section class="listado-header">
                <p>Gestion Categorias</p>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="lista-gen-header">
                        <a href="web/cmdDefaultCrearCategorias">
                            <button class="btn-agregar"> AGREGAR
                                <span></span>
                            </button>
                        </a>
                    </div>

                    <div class="lista-gen">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>Acciones</th>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                            </thead>

                            <tbody>
                                <?php
                                foreach ($d->data as $categorias) {
                                    print_r("<tr>");
                                    print_r("<td>
                                    <a href='web/cmdDefaultEditarCategorias/" . $categorias->id . "'><i class='nav-icon fas fa-edit'style='color:#9cd1f2; margin-right:20px;'></i></a>
                                    <a href='web/cmdEliminarCategorias/" . $categorias->id . "'><i class='nav-icon fas fa-trash'style='color:#CB6462;'></i></a>
                                    </td>");
                                    print_r("<td> $categorias->id</td>");
                                    print_r("<td> $categorias->nombre</td>");
                                    print_r("<td> $categorias->descripcion</td>");
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