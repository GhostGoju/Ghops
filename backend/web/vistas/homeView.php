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






            <body>

                <div class="product-card" id="product2">
                    <img src="imagen_pantalon.jpg" alt="Pantalón">
                    <h2>Pantalón</h2>
                    <p>Descripción</p>
                    <p>Precio: $29.99</p>
                    <button class="toggle-cart" data-product-id="product2">Añadir al carrito</button>
                    <button class="toggle-favorites" data-product-id="product2">Agregar a favoritos</button>
                </div>

                <div>
                    <h3>Carrito</h3>
                    <ul id="cart-list" class="product-list"></ul>
                    <button id="empty-cart" class="empty-button">Vaciar Carrito</button>
                </div>

                <div>
                    <h3>Favoritos</h3>
                    <ul id="favorites-list" class="product-list"></ul>
                    <button id="empty-favorites" class="empty-button">Vaciar Favoritos</button>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        // Obtener datos almacenados en localStorage
                        const storedCart = JSON.parse(localStorage.getItem("cart")) || [];
                        const storedFavorites = JSON.parse(localStorage.getItem("favorites")) || [];

                        // Estructuras de datos para almacenar productos en el carrito y favoritos
                        const cart = storedCart;
                        const favorites = storedFavorites;

                        // Función para agregar o quitar un producto del carrito
                        function toggleCart(productId) {
                            const index = cart.findIndex(item => item.productId === productId);
                            if (index !== -1) {
                                // El producto ya está en el carrito, eliminarlo
                                cart.splice(index, 1);
                            } else {
                                // El producto no está en el carrito, agregarlo con cantidad 1
                                cart.push({
                                    productId,
                                    quantity: 1
                                });
                            }
                            updateCart();
                            saveToLocalStorage("cart", cart);
                        }

                        // Función para agregar o quitar un producto de favoritos
                        function toggleFavorites(productId) {
                            const index = favorites.findIndex(item => item.productId === productId);
                            if (index !== -1) {
                                // El producto ya está en favoritos, eliminarlo
                                favorites.splice(index, 1);
                            } else {
                                // El producto no está en favoritos, agregarlo
                                favorites.push({
                                    productId
                                });
                            }
                            updateFavorites();
                            saveToLocalStorage("favorites", favorites);
                        }

                        // Función para guardar datos en localStorage
                        function saveToLocalStorage(key, data) {
                            localStorage.setItem(key, JSON.stringify(data));
                        }

                        // Función para actualizar la lista de productos en el carrito
                        function updateCart() {
                            const cartList = document.getElementById("cart-list");
                            cartList.innerHTML = "";
                            cart.forEach(item => {
                                const listItem = document.createElement("li");
                                listItem.textContent = `${item.productId} - Cantidad: ${item.quantity}`;
                                const incrementButton = document.createElement("button");
                                incrementButton.textContent = "+";
                                incrementButton.addEventListener("click", function() {
                                    incrementQuantity(item.productId);
                                });
                                const decrementButton = document.createElement("button");
                                decrementButton.textContent = "-";
                                decrementButton.addEventListener("click", function() {
                                    decrementQuantity(item.productId);
                                });
                                const deleteButton = document.createElement("button");
                                deleteButton.textContent = "Eliminar";
                                deleteButton.addEventListener("click", function() {
                                    removeFromCart(item.productId);
                                });
                                listItem.appendChild(incrementButton);
                                listItem.appendChild(decrementButton);
                                listItem.appendChild(deleteButton);
                                cartList.appendChild(listItem);
                            });
                        }

                        // Función para actualizar la lista de productos favoritos
                        function updateFavorites() {
                            const favoritesList = document.getElementById("favorites-list");
                            favoritesList.innerHTML = "";
                            favorites.forEach(item => {
                                const listItem = document.createElement("li");
                                listItem.textContent = item.productId;
                                const deleteButton = document.createElement("button");
                                deleteButton.textContent = "Eliminar de Favoritos";
                                deleteButton.addEventListener("click", function() {
                                    removeFromFavorites(item.productId);
                                });
                                listItem.appendChild(deleteButton);
                                favoritesList.appendChild(listItem);
                            });
                        }

                        // Función para incrementar la cantidad de un producto en el carrito
                        function incrementQuantity(productId) {
                            const index = cart.findIndex(item => item.productId === productId);
                            if (index !== -1) {
                                cart[index].quantity++;
                                updateCart();
                                saveToLocalStorage("cart", cart);
                            }
                        }

                        // Función para decrementar la cantidad de un producto en el carrito
                        function decrementQuantity(productId) {
                            const index = cart.findIndex(item => item.productId === productId);
                            if (index !== -1 && cart[index].quantity > 1) {
                                cart[index].quantity--;
                                updateCart();
                                saveToLocalStorage("cart", cart);
                            }
                        }

                        // Función para eliminar un producto del carrito
                        function removeFromCart(productId) {
                            const index = cart.findIndex(item => item.productId === productId);
                            if (index !== -1) {
                                // Reducir la cantidad o eliminar completamente si es 1
                                if (cart[index].quantity > 1) {
                                    cart[index].quantity--;
                                } else {
                                    cart.splice(index, 1);
                                }
                                updateCart();
                                saveToLocalStorage("cart", cart);
                            }
                        }

                        // Función para eliminar un producto de favoritos
                        function removeFromFavorites(productId) {
                            const index = favorites.findIndex(item => item.productId === productId);
                            if (index !== -1) {
                                favorites.splice(index, 1);
                                updateFavorites();
                                saveToLocalStorage("favorites", favorites);
                            }
                        }

                        // Evento click para agregar/quitar al carrito
                        document.querySelectorAll(".toggle-cart").forEach(button => {
                            button.addEventListener("click", function() {
                                const productId = this.getAttribute("data-product-id");
                                toggleCart(productId);
                            });
                        });

                        // Evento click para agregar/quitar a favoritos
                        document.querySelectorAll(".toggle-favorites").forEach(button => {
                            button.addEventListener("click", function() {
                                const productId = this.getAttribute("data-product-id");
                                toggleFavorites(productId);
                            });
                        });

                        // Evento click para vaciar carrito
                        document.getElementById("empty-cart").addEventListener("click", function() {
                            cart.length = 0;
                            updateCart();
                            saveToLocalStorage("cart", cart);
                        });

                        // Evento click para vaciar favoritos
                        document.getElementById("empty-favorites").addEventListener("click", function() {
                            favorites.length = 0;
                            updateFavorites();
                            saveToLocalStorage("favorites", favorites);
                        });

                        // Al cargar la página, actualizar las listas
                        updateCart();
                        updateFavorites();
                    });
                </script>

            </body>

</html>








</div>
</div>
<?php require_once INCLUDES_TEMPLADE . "footer.php"; ?>
<?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?>
</body>

</html>