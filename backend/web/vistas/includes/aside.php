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
                <!-- OPCIONES DE GESTION DE LA PAGINA -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-pen"></i>
                        <p>
                            Gestion
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <div class="col-md-12">
                            <a href="<?php echo URL; ?>web/cmdConsultarUsuarios" class="btn btn-outline-primary btn-block btn-sm"><i class="fa fa-user"></i> Usuarios</a>
                            <a href="<?php echo URL; ?>web/cmdConsultarProductos" class="btn btn-outline-info btn-block btn-sm"><i class="fas fa-tshirt"></i> Productos</a>
                            <a href="<?php echo URL; ?>web/cmdConsultarCategorias" class="btn btn-outline-danger btn-block btn-sm"><i class="fa fa-box"></i> Categorias</a>
                        </div>
                    </ul>
                </li>

                <!-- OPCIONES EXTRA DE LA PAGINA -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Extras
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <a class="btn btn-danger btn-block" href="<?php echo URL; ?>web/cmdCerrarSesion"><i class="fa fa-door-open"></i> SALIR</a>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>