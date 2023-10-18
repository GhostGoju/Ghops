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
            <section class="listado-header">
                <p>Gestion Usuarios</p>
            </section>

            <section class="content">
                <div class="lista-gen">
                    <h1></h1>

                    <form action="web/cmdActualizarUsuarios" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nombre">ID</label>
                                <input type="number" class="form-control" readonly="false" value="<?php print_r($d->data[0]->id); ?>" name="id" id="nombre" placeholder="Id usuario">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre Usuario</label>
                                <input type="text" readonly="false" class="form-control" value="<?php print_r($d->data[0]->nombre); ?>" name="nombre" id="nombre" placeholder="Nombre">

                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" readonly="false" class="form-control" value="<?php print_r($d->data[0]->email); ?>" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="number" class="form-control" value="<?php print_r($d->data[0]->estado); ?>" name="estado" id="estado" placeholder="Estado">
                            </div>
                            <div class="form-group">
                                <label for="rol">Rol</label>
                                <input type="number" class="form-control" value="<?php print_r($d->data[0]->rol); ?>" name="rol" id="rol" placeholder="Rol">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn-actualizar">Actualizar</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>