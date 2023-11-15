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
        <div class="h-100">
            <section class="listado-header">
                <p>Gestion Productos</p>
            </section>
            <section class="content">
                <div class="card">
                    <div class="lista-gen-header">
                        <a href="web/cmdDefaultCrearProductos">
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
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>categoria</th>
                                    <th>Estado</th>
                                    <th>Img</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                foreach ($d->data as $productos) {
                                    print_r("<tr>");
                                    print_r("<td>
                    <a href='web/cmdDefaultEditarProductos/" . $productos->id . "'><i class='nav-icon fas fa-edit'style='color:#9cd1f2; margin-right:20px;'></i></a>
                    <a href='web/cmdEliminarProductos/" . $productos->id . "'><i class='nav-icon fas fa-trash'style='color:#CB6462;'></i></a>
                    </td>");
                                    print_r("<td> $productos->id</td>");
                                    print_r("<td> $productos->nombre</td>");
                                    print_r("<td> $productos->descripcion</td>");
                                    print_r("<td> $productos->precio</td>");
                                    print_r("<td> $productos->categoria</td>");
                                    print_r("<td> $productos->estado_producto</td>");
                                    // Agregar los atributos de datos al botón "Add to Cart"
                                    print_r("<td><button class='add-to-cart' 
                    data-id='$productos->id'
                    data-nombre='$productos->nombre'
                    data-descripcion='$productos->descripcion'
                    data-precio='$productos->precio'
                    data-categoria='$productos->categoria'
                    data-estado='$productos->estado_producto'
                    data-imagen='$productos->imagen'
                    >Add to Cart</button></td>");
                                    print_r("</tr>");
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- 
                    <div id="cart-container" class="product-container">
                    </div> -->


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