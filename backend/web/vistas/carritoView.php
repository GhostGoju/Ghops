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
        <?php require_once INCLUDES_TEMPLADE . "aside.php"; ?></php>
        <?php if ($_SESSION['rol'] == 1) : ?>
            <?php require_once INCLUDES_TEMPLADE . "aside.php"; ?></php>
        <?php endif; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="listado-header">
                <p>CARRITO</p>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="lista-gen-header">
                    </div>

                    <div class="lista-gen">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>Acciones</th>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Rol</th>
                                <th>Estado</th>
                            </thead>

                            <tbody>
                                <?php
                                foreach ($d->data as $productos) {
                                    print_r("<tr>");
                                    print_r("<td> $productos->id</td>");
                                    print_r("<td> $productos->nombre</td>");
                                    print_r("<td> $productos->email</td>");
                                    print_r("<td> $productos->password</td>");
                                    print_r("<td> $productos->rol</td>");
                                    print_r("<td> $productos->estado</td>");
                                    print_r("</tr>");
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?></php>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
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