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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h3>Gestion Usuarios</h3> -->
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li> -->
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="listado-header">
                <p>Editar Productos</p>
            </section>

            <section class="content">
                <div class="lista-gen">
                    <h1></h1>

                    <form action="web/cmdActualizarProductos" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">Id</label>
                                <input type="number" readonly="false" class="form-control" value="<?php print_r($d->data[0]->id); ?>" name="id" id="id" placeholder="id">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" value="<?php print_r($d->data[0]->nombre); ?>" name="nombre" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" class="form-control" value="<?php print_r($d->data[0]->descripcion); ?>" name="descripcion" id="descripcion" placeholder="Descripcion">
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input type="number" class="form-control" value="<?php print_r($d->data[0]->precio); ?>" name="precio" id="precio" placeholder="Precio">
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <input type="number" class="form-control" value="<?php print_r($d->data[0]->categoria); ?>" name="categoria" id="categoria" placeholder="Categoria">
                            </div>
                            <div class="form-group">
                                <label for="categoria">Estado</label>
                                <input type="number" class="form-control" value="<?php print_r($d->data[0]->estado_producto); ?>" name="estado_producto" id="estado_producto" placeholder="Estado">
                            </div>
                            <div class="form-group">
                                <label for="imagen">Imagen</label>
                                <input type="file" class="form-control" value="<?php print_r($d->data[0]->imagen); ?>" name="imagen" id="imagen" placeholder="imagen">
                            </div>
                        </div>

                        <div class="lista-gen-header">
                            <a href="web/cmdDefaultCrearProductos">
                                <button class="btn-agregar"> ACTUALIZAR
                                    <span></span>
                                </button>
                            </a>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>


</body>

</html>