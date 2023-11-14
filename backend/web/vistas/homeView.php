<?php session_start();
if (!isset($_SESSION['rol'])) {
    header("Location: cmdDefaultLogin");
    exit;
}
require_once INCLUDES_TEMPLADE . "header.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>

<body class="contenido">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?>
        <div class="public-content">
            <section class="listado-header">
                <p>Home</p>
            </section>


            <div class="product-card" id="product1">
                <img src="imagen_camiseta.jpg" alt="Camiseta">
                <h2>Camiseta</h2>
                <p>Descripción</p>
                <p>Precio: $19.99</p>
                <button class="add-to-cart" data-product-id="product1">Añadir al carrito</button>
            </div>

            <div class="product-card" id="product2">
                <img src="imagen_pantalon.jpg" alt="Pantalón">
                <h2>Pantalón</h2>
                <p>Descripción</p>
                <p>Precio: $29.99</p>
                <button class="add-to-cart" data-product-id="product2">Añadir al carrito</button>
            </div>


        </div>
    </div>
    <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?>
</body>

</html>