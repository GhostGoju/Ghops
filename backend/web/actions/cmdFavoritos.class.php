// Supongamos que tienes un botón HTML con el id "botonFavorito" y un producto con el id "producto" que deseas agregar a favoritos.

// Definir una función para manejar el clic del botón
function agregarAFavoritos() {
// Obtener el producto que se va a agregar a favoritos
var producto = document.getElementById("producto");

// Verificar si el producto ya está en favoritos (esto dependerá de tu implementación)
if (productoEnFavoritos(producto)) {
alert("El producto ya está en favoritos.");
} else {
// Agregar el producto a la lista de favoritos (esto también dependerá de tu implementación)
agregarProductoAFavoritos(producto);
alert("El producto se ha agregado a favoritos.");
}
}

// Agregar un event listener al botón para que llame a la función cuando se hace clic
var botonFavorito = document.getElementById("botonFavorito");
botonFavorito.addEventListener("click", agregarAFavoritos);