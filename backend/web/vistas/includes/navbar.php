<nav class="main-header navbar navbar-expand ">

    <ul class="navbar-nav">
        <?php
        if ($_SESSION['rol'] == 1) {
            echo '<li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>';
        }
        ?>
        <p class="mb-0">

        </p>
    </ul>
    <ul class="navbar-nav">
    </ul>
    <ul class="navbar-nav ml-auto">
        <p class="link-bag">
            <a href="<?php echo URL; ?>web/cmdDefaultFavoritos" class="nav-link">
                <i class="fas fa-heart "> Favoritos</i>
            </a>
        </p>
        <p class="link-bag">
            <a href="<?php echo URL; ?>web/cmdDefaultCarrito" class="nav-link">
                <i class="fas fa-opencart "> Pagar</i>
            </a>
            <!-- <i class="nav-icon fas fa-cart-hear"></i> -->
        </p>
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="public/img/img-decoracion/maniqui.png" class="user-image img-circle elevation-3" alt="User Image">
                <span class="img-user">
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-">
                <li class="user-header bg-primary">
                    <img src="public/img/img-decoracion/maniqui.png" class="img-circle elevation-2" alt="User Image">
                </li>

        </li>
    </ul>
    </li>
    </ul>
</nav>