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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="listado-header">
                <p>Crear Categorias</p>
            </section>

            <section class="content">
                <div class="lista-gen">
                    <h1></h1>

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
        </div>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>