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
                    <div class="lista-gen">
                        <div class="header-editor">
                            <h3 class="card-title">Crear Categoria</h3>
                        </div>

                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="web/cmdCrearCategorias" method="POST">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nombre">Nombre Categoria</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripcion</label>
                                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn-actualizar">Crear</button>
                            </div>
                        </form>
                    </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>


</body>

</html>