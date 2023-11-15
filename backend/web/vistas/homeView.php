<?php session_start();
if (!isset($_SESSION['rol'])) {
    header("Location: cmdDefaultLogin");
    exit;
}
require_once INCLUDES_TEMPLADE . "header.php";
if (session_status() == PHP_SESSION_NONE) {
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

            <div id="cart-container" class="product-container">
                <!-- Aquí se mostrarán las tarjetas de productos -->
            </div>









            <!-- <div class="product-card" data-product-id="1">
                <img src="product_image.jpg" alt="Product Image">
                <h3>Product Name</h3>
                <p>Description of the product goes here.</p>
                <button class="add-to-favorites">Add to Favorites</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div id="other-section">
                <div id="favorites">
                    <h2>Favorites</h2>
                    <ul id="favorites-list"></ul>
                </div>

                <div id="cart">
                    <h2>Shopping Cart</h2>
                    <button id="clear-cart">Clear Cart</button>
                    <ul id="cart-list"></ul>
                </div>
            </div>

 -->



        </div>
    </div>
    <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?>
</body>

</html>