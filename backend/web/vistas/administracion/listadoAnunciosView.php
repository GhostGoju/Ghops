<?php session_start();
if (!isset($_SESSION['rol'])) {
    header("Location: cmdDefaultLogin");
    exit;
}
require_once INCLUDES_TEMPLADE . "header.php";
if (session_status() == PHP_SESSION_NONE) {
}
?>
<!DOCTYPE html>
<html lang="en">

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?>
        <div class="">
            <section class="listado-header">
                <p>Gestion Anuncios</p>
            </section>
            <section class="content">
                <div class="card">
                    <div class="lista-gen-header">
                        <a href="web/cmdDefaultCrearAnuncios">
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
                                <th>Estado</th>
                                <th>Publicar</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($d->data as $anuncios) {
                                    print_r("<tr>");
                                    print_r("<td>
                                    <a href='web/cmdDefaultEditarAnuncios/" . $anuncios->id . "'><i class='nav-icon fas fa-edit'style='color:#9cd1f2; margin-right:20px;'></i></a>
                                    <a href='web/cmdEliminarAnuncios/" . $anuncios->id . "'><i class='nav-icon fas fa-trash'style='color:#CB6462;'></i></a>
                                    </td>");
                                    print_r("<td> $anuncios->id</td>");
                                    print_r("<td> $anuncios->nombre</td>");
                                    print_r("<td> $anuncios->descripcion</td>");
                                    print_r("<td> $anuncios->estado</td>");
                                    print_r("<td><button class='publicar-anuncio'
                                    data-id='$anuncios->id'
                                    data-nombre='$anuncios->nombre'
                                    data-descripcion='$anuncios->descripcion'
                                    data-descripcion='$anuncios->estado's
                                    >Publicar</button></td>");
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