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
        <div class="content-wrapper">
            <section class="listado-header">
                <p>Publicar Categorias</p>
            </section>

            <section class="content">
                <div class="lista-gen">
                    <h1></h1>

                    <form id="publicarCategoria" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">Id</label>
                                <input type="number" readonly="false" class="form-control" value="<?php print_r($d->data[0]->id); ?>" name="id" id="id" placeholder="id">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre Categoria</label>
                                <input type="text" class="form-control" value="<?php print_r($d->data[0]->nombre); ?>" name="nombre" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" class="form-control" value="<?php print_r($d->data[0]->descripcion); ?>" name="descripcion" id="descripcion" placeholder="Descripcion">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn-actualizar">Publicar</button>
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