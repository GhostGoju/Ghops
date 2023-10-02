<aside class="main-sidebar  elevation-4">
    <!-- Brand Logo -->
    <a href="web/cmdDefaultHome" class="brand-link">
        <img src="public/img/logos/marca (4).png" alt="Ghops Logo" class="brand-image img-" style="opacity: .8">
        <span class="brand-text">Ghops</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                <!-- OPCIONES DE MENU DE USUARIO -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="public/img/img-decoracion/maniqui.png">
                    </div>
                    <div class="info">
                        <a href="<?php echo URL; ?>web/cmdDefaultPerfilUsuarios" class="d-block"><?php print_r($_SESSION['nombre']) ?></a>
                    </div>
                </div>


                <!-- OPCIONES DE GESTION DE LA PAGINA -->
                <?php if ($_SESSION['rol'] == 1) : ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-pen"></i>
                            <p>
                                Gestion
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo URL; ?>web/cmdConsultarUsuarios" class="nav-link">
                                    <i class="fa fa-user nav-icon"></i>
                                    <p>Usuarios</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo URL; ?>web/cmdConsultarProductos" class="nav-link">
                                    <i class="fa fa-tshirt nav-icon"></i>
                                    <p>Productos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo URL; ?>web/cmdConsultarCategorias" class="nav-link">
                                    <i class="fa fa-book nav-icon"></i>
                                    <p>Categorias</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <br>
                <br>


                <!-- OPCIONES EXTRA DE LA PAGINA -->
                <li class="nav-item">
                    <a href="<?php echo URL; ?>web/cmdDefaultCategorias" class="nav-link">
                        <i class="fa fa-tshirt nav-icon"></i>
                        <p>Categorias</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo URL; ?>web/cmdDefaultFavoritos" class="nav-link">
                        <i class="fa fa-heart nav-icon"></i>
                        <p>Favoritos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo URL; ?>web/cmdDefaultCarrito" class="nav-link">
                        <i class="fa fa-cart-arrow-down nav-icon"></i>
                        <p>Carrito</p>
                    </a>
                </li>
                <br>
                <br>


                <!-- EXTRAS DE ASIDE -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Extras
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo URL; ?>web/cmdPaginaContacto" class="nav-link">
                                <i class="fa fa-envelope nav-icon"></i>
                                <p>Contactanos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URL; ?>web/cmdFAQ" class="nav-link">
                                <i class="fa fa-question nav-icon"></i>
                                <p>FAQ</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <br>
                <br>


                <!-- CERRAR SESION -->
                <li class="nav-item">
                    <a href="<?php echo URL; ?>web/cmdCerrarSesion" class="nav-link">
                        <i class="fa fa-door-open nav-icon"></i>
                        <p>SALIR</p>
                    </a>
                </li>


            </ul>
        </nav>
    </div>
</aside>