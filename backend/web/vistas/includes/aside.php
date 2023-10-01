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
                                <a href="<?php echo URL; ?>web/cmdConsultarUsuarios"><i class="fa fa-user"></i> Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo URL; ?>web/cmdConsultarProductos"><i class="fas fa-tshirt"></i> Productos</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo URL; ?>web/cmdConsultarCategorias"><i class="fa fa-box"></i> Categorias</a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>


                <!-- OPCIONES EXTRA DE LA PAGINA -->
                <li class="nav-item">
                    <a href="<?php echo URL; ?>web/cmdDefaultCategorias" class="nav-link">Categorias</a>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Extras
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <tr>
                            <td>
                                <a type="button" href="<?php echo URL; ?>web/cmdPaginaContacto" class="btn btn-block bg-gradient-info">Contactanos</a>
                            </td>
                            <td>
                                <a type="button" href="<?php echo URL; ?>web/cmdFAQ" class="btn btn-block bg-gradient-info">FAQ</a>
                            </td>
                        </tr>
                    </ul>
                </li>







                <!-- CERRAR SESION -->
                <div class="button-cerrar-sesion">
                    <a class="btn btn-danger btn-block" href="<?php echo URL; ?>web/cmdCerrarSesion"><i class="fa fa-door-open"></i> SALIR</a>
                </div>


            </ul>
        </nav>
    </div>
</aside>