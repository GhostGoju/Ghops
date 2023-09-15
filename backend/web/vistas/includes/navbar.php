<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <p class="mb-0">
            <a href="<?php echo URL; ?>web/cmdDefaultHome" class="nav-link">Home</a>
        </p>
        <p class="mb-0">
            <a href="<?php echo URL; ?>web/cmdDefaultHome" class="nav-link">Categorias</a>
        </p>

        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown"></button>

            <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="<?php echo URL; ?>web/cmdPaginaContacto">Contactanos</a>
                <a class="dropdown-item" href="<?php echo URL; ?>web/cmdFAQ">FAQ</a>
            </div>
        </div>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <p class="mb-0">
            <a href="<?php echo URL; ?>web/cmdDefaultFavoritos" class="nav-link">
                <i class="fas fa-heart"></i> Favoritos
            </a>
        </p>
        <p class="mb-0">
            <a href="<?php echo URL; ?>web/cmdDefaultCarrito" class="nav-link">
                <i class="fas fa-credit-card"></i> Pagar
            </a>
            <!-- <i class="nav-icon fas fa-cart-hear"></i> -->
        </p>
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="public/img/img-decoracion/maniqui.png" class="user-image img-circle elevation-3" alt="User Image">
                <span class="d-none d-md-inline">User</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <img src="public/img/img-decoracion/maniqui.png" class="img-circle elevation-2" alt="User Image">

                    <p>
                        User
                        <small>Datos</small>
                    </p>
                </li>
                <li class="user-footer">
                    <a href="web/cmdDefaultPerfilUsuarios" class="btn btn-default btn-flat">Perfil</a>
                    <a href="web/cmdDefaultLogin" class="btn btn-default btn-flat float-right">Salir</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.navbar -->