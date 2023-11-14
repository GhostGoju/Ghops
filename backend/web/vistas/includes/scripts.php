        <!-- jQuery -->
        <script src="<?php echo URL; ?>public/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo URL; ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Ekko Lightbox -->
        <script src="<?php echo URL; ?>public/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo URL; ?>public/dist/js/adminlte.min.js"></script>
        <!-- Filterizr-->
        <script src="<?php echo URL; ?>public/plugins/filterizr/jquery.filterizr.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo URL; ?>public/dist/js/demo.js"></script>
        <!-- SweetAlert2 -->
        <script src="<?php echo URL; ?>public/plugins/sweetalert2/sweetalert2.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="<?php echo URL; ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo URL; ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo URL; ?>public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo URL; ?>public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo URL; ?>public/plugins/jszip/jszip.min.js"></script>
        <script src="<?php echo URL; ?>public/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="<?php echo URL; ?>public/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
        <script src="public/js/adminlte.min.js"></script>

        <script>
            $(function() {
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                <?php if (isset($d) && $d->message != "") : ?>
                    Toast.fire({
                        icon: 'success',
                        title: '<?php echo $d->message; ?>'
                    })
                <?php endif ?>
            });
        </script>


        <!-- //////////////////////////////////////////////// -->
        <script>
            function updateDate() {
                var currentDate = new Date();
                var options = {
                    year: 'numeric',
                    month: 'numeric',
                    day: 'numeric'
                };
                var dateElements = document.querySelectorAll("#currentDate"); // Selecciona ambos elementos
                for (var i = 0; i < dateElements.length; i++) {
                    dateElements[i].textContent = currentDate.toLocaleDateString(undefined, options);
                }
            }
            updateDate();
            setInterval(updateDate, 1000);
        </script>


        <!-- //////////////////////////////////////////////// -->
        <script>
            class Producto {
                constructor(id, nombre, precio) {
                    this.id = id;
                    this.nombre = nombre;
                    this.precio = precio;
                }
            }

            function agregarAlCarrito(productID) {
                const producto = new Producto(productID, `Nombre del Producto ${productID}`, 19.99);

                var carrito = localStorage.getItem('carrito') ? JSON.parse(localStorage.getItem('carrito')) : [];

                // Verificar si el producto ya está en el carrito
                const productoExistenteIndex = carrito.findIndex(item => item.id === productID);

                if (productoExistenteIndex !== -1) {
                    // Si el producto ya está en el carrito, eliminarlo
                    carrito.splice(productoExistenteIndex, 1);
                    console.log('Producto eliminado del carrito.');
                } else {
                    // Agregar el producto al carrito
                    carrito.push(producto);
                    console.log('Producto agregado al carrito.');
                }

                localStorage.setItem('carrito', JSON.stringify(carrito));
                mostrarCarrito();
            }

            function eliminarProducto(productID) {
                var carrito = localStorage.getItem('carrito') ? JSON.parse(localStorage.getItem('carrito')) : [];

                // Filtrar el producto a eliminar del carrito
                carrito = carrito.filter(item => item.id !== productID);

                localStorage.setItem('carrito', JSON.stringify(carrito));
                mostrarCarrito();
            }

            function vaciarCarrito() {
                localStorage.removeItem('carrito');
                mostrarCarrito();
            }

            function mostrarCarrito() {
                const cartItemsContainer = document.getElementById('cart-items');
                const carrito = JSON.parse(localStorage.getItem('carrito')) || [];

                // Limpiar el contenido actual del carrito
                cartItemsContainer.innerHTML = '';

                // Mostrar cada elemento del carrito
                carrito.forEach(item => {
                    const li = document.createElement('li');
                    li.className = 'cart-item';

                    // Crear imagen en el carrito
                    const productImage = document.createElement('img');
                    productImage.src = `imagen_${item.id}.jpg`; // Asume que las imágenes siguen un formato de nomenclatura específico
                    productImage.alt = item.nombre;
                    productImage.className = 'cart-item-image';
                    li.appendChild(productImage);

                    // Agregar nombre y precio al carrito
                    const productInfo = document.createElement('span');
                    productInfo.textContent = `${item.nombre} - $${item.precio.toFixed(2)}`;
                    li.appendChild(productInfo);

                    // Agregar botón para eliminar producto específico
                    const removeButton = document.createElement('span');
                    removeButton.className = 'remove-product';
                    removeButton.textContent = 'Eliminar';
                    removeButton.onclick = () => eliminarProducto(item.id);

                    li.appendChild(removeButton);
                    cartItemsContainer.appendChild(li);
                });

                // Mostrar un mensaje si el carrito está vacío
                if (carrito.length === 0) {
                    const emptyCartMessage = document.createElement('p');
                    emptyCartMessage.id = 'empty-cart';
                    emptyCartMessage.textContent = 'El carrito está vacío.';
                    cartItemsContainer.appendChild(emptyCartMessage);
                }

                // Mostrar botón para vaciar completamente el carrito
                const clearCartButton = document.getElementById('clear-cart');
                clearCartButton.onclick = vaciarCarrito;
            }


            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    agregarAlCarrito(this.dataset.productId);
                });
            });

            // Mostrar el contenido del carrito al cargar la página
            mostrarCarrito();
        </script>