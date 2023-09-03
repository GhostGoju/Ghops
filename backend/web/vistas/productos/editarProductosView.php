<!DOCTYPE html>
<html lang="en">

<?php require_once INCLUDES_TEMPLADE . "header.php"; ?></php>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <?php require_once INCLUDES_TEMPLADE . "aside.php"; ?></php>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
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
            <section class="content">

                <div class="card-body">
                    <h1></h1>

                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Editar Productos</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="web/cmdActualizarProductos" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">Id</label>
                                    <input type="number" readonly="false" class="form-control" value="<?php print_r($d->data[0]->id); ?>" name="id" id="id" placeholder="id">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Nombre Producto</label>
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
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?></php> -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>


</body>

</html>