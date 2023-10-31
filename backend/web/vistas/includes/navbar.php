<!-- Navbar -->
<nav class="navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

        <li class="nav-item d-none d-sm-inline-block">
            <a href="web/cmdDefaultHome" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo URL; ?>web/cmdDefaultCategorias" class="nav-link">Categorias</a>
        </li>
    </ul>


    <!-- ESPACIO DE GESTION -->
    <?php if ($_SESSION['rol'] == 1) : ?>
        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span class="sr-only"></span>
                Gestion
            </button>
            <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="<?php echo URL; ?>web/cmdConsultarUsuarios">Usuarios</a>
                <a class="dropdown-item" href="<?php echo URL; ?>web/cmdConsultarProductos">Productos</a>
                <a class="dropdown-item" href="<?php echo URL; ?>web/cmdConsultarCategorias">Categorias</a>
            </div>
        </div>
    <?php endif; ?>
    <!-- ESPACIO DE GESTION -->


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <li class="nav-item">
            <a href="<?php echo URL; ?>web/cmdDefaultFavoritos" class="nav-link">
                <i class="fa fa-heart nav-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo URL; ?>web/cmdDefaultCarrito" class="nav-link">
                <i class="fa fa-cart-arrow-down nav-icon"></i>
            </a>
        </li>
        </li>
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="public/img/img-decoracion/maniqui.png" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline"><?php print_r($_SESSION['nombre']) ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <img src="public/img/img-decoracion/maniqui.png" class="img-circle elevation-2" alt="User Image">

                    <p>
                        <?php print_r($_SESSION['nombre']) ?>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="web/cmdDefaultPerfilUsuarios" class="btn btn-info btn-flat">Perfil</a>
                    <a href="web/cmdCerrarSesion" class="btn btn-danger btn-flat float-right">Salir</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>