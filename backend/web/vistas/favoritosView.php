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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favoritos</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>
        <div class="h-100">
            <section class="listado-header">
                <p>Favoritos</p>
            </section>
        </div>


        <div id="cart-container">
            <h2>Carrito</h2>
            <ul id="cart-items"></ul>
            <button id="clear-cart">Vaciar</button>
        </div>






    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>