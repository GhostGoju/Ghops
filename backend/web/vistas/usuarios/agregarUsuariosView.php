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
        <!-- Content Wrapper. Contains page content -->
        <div class="content h-100">
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
                <p>Crear Usuarios</p>
            </section>

            <section class="content">
                <div class="lista-gen">
                    <h1></h1>

                    <form action="web/cmdCrearUsuarios" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Apellido</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellido">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="number" class="form-control" name="estado" id="estado" placeholder="Estado">
                            </div>
                            <div class="form-group">
                                <label for="rol">Rol</label>
                                <input type="number" class="form-control" name="rol" id="rol" placeholder="Rol">
                            </div>
                        </div>
                        <div class="lista-gen-header">
                            <a href="web/cmdDefaultCrearProductos">
                                <button class="btn-agregar"> CREAR
                                    <span></span>
                                </button>
                            </a>
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