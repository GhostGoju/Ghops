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
                </div>
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="lista-gen">
                    <h1></h1>

                    <div class="card card-primary">
                        <div class="header-editor">
                            <h3 class="card-title">Publicar Producto</h3>
                        </div>


                        <form action="/cmdpublicarProducto" method="GET">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">Id</label>
                                    <input type="number" readonly="true" class="form-control" value="<?php echo $d->data[0]->id; ?>" name="id" id="id">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Nombre Producto</label>
                                    <input type="text" readonly="true" class="form-control" value="<?php echo $d->data[0]->nombre; ?>" name="nombre" id="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <input type="text" readonly="true" class="form-control" value="<?php echo $d->data[0]->descripcion; ?>" name="descripcion" id="descripcion">
                                </div>
                                <div class="form-group">
                                    <label for="precio">Precio</label>
                                    <input type="number" readonly="true" class="form-control" value="<?php echo $d->data[0]->precio; ?>" name="precio" id="precio">
                                </div>
                                <div class="form-group">
                                    <label for="categoria">Categoría</label>
                                    <input type="text" readonly="true" class="form-control" value="<?php echo $d->data[0]->categoria; ?>" name="categoria" id="categoria">
                                </div>
                                <div class="form-group">
                                    <label for="imagen">Imagen</label>
                                    <input type="file" class="form-control" name="imagen" id="imagen">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn-actualizar">Publicar</button>
                            </div>
                        </form>
                    </div>
            </section>
        </div>
    </div>

    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>