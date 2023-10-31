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
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>
        <div class="content h-100">
            <section class="listado-header">
                <p>Gestion Usuarios</p>
            </section>
            <section class="content">
                <div class="card">
                    <div class="lista-gen-header">
                        <a href="web/cmdDefaultCrearUsuarios">
                            <button class="btn-agregar"> AGREGAR
                                <span></span>
                            </button>
                        </a>
                    </div>
                    <div class="lista-gen">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>Acciones</th>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                    <th>pais</th>
                                    <th>Departamento</th>
                                    <th>Municipio</th>
                                    <th>Rol</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($d->data as $usuarios) {
                                    print_r("<tr>");
                                    print_r("<td><a href='web/cmdDefaultEditarUsuarios/" . $usuarios->id . "'><i class='nav-icon fas fa-edit'style='color:#9cd1f2; margin-right:20px;'></i></a></td>");
                                    print_r("<td> $usuarios->id</td>");
                                    print_r("<td> $usuarios->nombre</td>");
                                    print_r("<td> $usuarios->apellidos</td>");
                                    print_r("<td> $usuarios->email</td>");
                                    print_r("<td> $usuarios->telefono</td>");
                                    print_r("<td> $usuarios->direccion</td>");
                                    print_r("<td> $usuarios->pais</td>");
                                    print_r("<td> $usuarios->departamento</td>");
                                    print_r("<td> $usuarios->municipio</td>");
                                    print_r("<td> $usuarios->rol</td>");
                                    print_r("<td> $usuarios->estado</td>");
                                    print_r("</tr>");
                                }
                                ?>
                            </tbody>
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