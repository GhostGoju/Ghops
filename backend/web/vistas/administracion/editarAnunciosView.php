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
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>
        <div class="">
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
                <p>Editar Anuncios</p>
            </section>
            <section class="content">
                <div class="lista-gen">
                    <h1></h1>

                    <form action="web/cmdActualizarAnuncios" method="POST">
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
                                <label for="estado">Estado</label>
                                <input type="number" class="form-control" value="<?php print_r($d->data[0]->estado); ?>" name="estado" id="estado" placeholder="Estado">
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