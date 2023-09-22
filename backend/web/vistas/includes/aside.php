<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="web/cmdDefaultHome" class="brand-link">
        <img src="public/img/logos/marca (4).png" alt="Ghops Logo" class="brand-image img-" style="opacity: .8">
        <span class="brand-text font-weight-light">Ghops</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">


                    <!-- OPCIONES DE GESTION DE LA PAGINA -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Gestion
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <a href="<?php echo URL; ?>web/cmdConsultarProductos" class="btn btn-app bg-info">
                            <i class="fas fa-tshirt"></i> Productos
                        </a>
                        <a href="<?php echo URL; ?>web/cmdConsultarUsuarios" class="btn btn-app bg-info">
                            <i class="fas fa-user"></i> Usuarios
                        </a>
                    </ul>
                </li>


                <!-- OPCIONES DE PUBLICACIONES -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Publicaciones
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <a href="<?php echo URL; ?>web/" class="btn btn-app bg-success">
                            <i class="fas fa-tshirt"></i> Publicar Producto
                        </a>
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
                        <a class="btn btn-app bg-secondary" href="<?php echo URL; ?>web/">
                            <i class="fas fa-toolbox"></i> Ajustes
                        </a>
                        <a class="btn btn-app bg-danger" href="<?php echo URL; ?>web/cmdCerrarSesion">
                            <i class="fas fa-door-open"></i> Salir
                        </a>
                    </ul>
                </li>


            </ul>
        </nav>
    </div>
</aside>