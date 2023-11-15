<script src="<?php echo URL; ?>https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
<!-- ENVIO DE PRODUCTO AL CARRITO Y FAVORITOS -->
<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const productCard = document.querySelector('.product-card');
        const addToFavoritesBtn = productCard.querySelector('.add-to-favorites');
        const addToCartBtn = productCard.querySelector('.add-to-cart');

        addToFavoritesBtn.addEventListener('click', (event) => toggleProductInList('favorites', event));
        addToCartBtn.addEventListener('click', (event) => toggleProductInList('cart', event));

        // Obtén el botón clear-cart y agrega un event listener
        const clearCartBtn = document.getElementById('clear-cart');
        clearCartBtn.addEventListener('click', function() {
            clearCart('cart');
            // Cargar productos almacenados en localStorage después de limpiar el carrito
            loadProductsFromStorage();
        });

        // Cargar productos almacenados en localStorage al cargar la página
        loadProductsFromStorage();
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Obtener el contenedor de la nueva ubicación
        const otherSection = document.getElementById('other-section');

        // Mover las listas al contenedor
        otherSection.appendChild(document.getElementById('favorites'));
        otherSection.appendChild(document.getElementById('cart'));
    });

    function toggleProductInList(key, event) {
        const productContainer = event.target.closest('.product-card');
        const productName = productContainer.querySelector('h3').innerText;

        const storedProducts = JSON.parse(localStorage.getItem(key)) || [];
        const index = storedProducts.indexOf(productName);

        if (index !== -1) {
            storedProducts.splice(index, 1);
        } else {
            storedProducts.push(productName);
        }

        localStorage.setItem(key, JSON.stringify(storedProducts));
        updateList(key);
    }

    function updateList(key) {
        const list = document.getElementById(`${key}-list`);
        list.innerHTML = '';

        const storedProducts = JSON.parse(localStorage.getItem(key)) || [];
        storedProducts.forEach(product => {
            const listItem = document.createElement('li');
            const productName = document.createElement('span');
            productName.innerText = product;
            listItem.appendChild(productName);

            if (key === 'cart') {
                const quantityContainer = document.createElement('div');
                const increaseBtn = createButton('+', () => updateProductQuantity(key, product, 1));
                quantityContainer.appendChild(increaseBtn);

                const quantityDisplay = document.createElement('span');
                quantityDisplay.innerText = getProductQuantity(key, product);
                quantityContainer.appendChild(quantityDisplay);

                const decreaseBtn = createButton('-', () => updateProductQuantity(key, product, -1));
                quantityContainer.appendChild(decreaseBtn);

                listItem.appendChild(quantityContainer);
            }

            const deleteButton = createButton('Delete', () => deleteProductFromList(key, product));
            listItem.appendChild(deleteButton);

            list.appendChild(listItem);
        });
    }

    function createButton(text, clickHandler) {
        const button = document.createElement('button');
        button.innerText = text;
        button.addEventListener('click', clickHandler);
        return button;
    }

    function getProductQuantity(key, product) {
        const quantityData = JSON.parse(localStorage.getItem(`${key}-quantity`)) || {};
        return quantityData[product] || 1;
    }

    function updateProductQuantity(key, product, change) {
        const quantityData = JSON.parse(localStorage.getItem(`${key}-quantity`)) || {};
        const currentQuantity = quantityData[product] || 1;
        const newQuantity = Math.max(1, currentQuantity + change);
        quantityData[product] = newQuantity;
        localStorage.setItem(`${key}-quantity`, JSON.stringify(quantityData));
        updateList(key);
    }

    function deleteProductFromList(key, product) {
        const storedProducts = JSON.parse(localStorage.getItem(key)) || [];
        const index = storedProducts.indexOf(product);

        if (index !== -1) {
            storedProducts.splice(index, 1);
            localStorage.setItem(key, JSON.stringify(storedProducts));
            updateList(key);
        }
    }

    function clearCart(key) {
        localStorage.removeItem(key);
        localStorage.removeItem(`${key}-quantity`);
        updateList(key);
    }

    function loadProductsFromStorage() {
        updateList('favorites');
        updateList('cart');
    }
</script> -->

<!-- ////////////////////////////////////////// -->
<!-- ENVIO DE PRODUCTOS AL HOME -->

<script>
    $(document).ready(function() {

        //* CONTROL DE CLICK DEL BOTON
        $('.publicar-producto').on('click', function() {
            //* VARIABLES PARA ALMCENAR LA INFORMACION OBTENIDA DE LA TABLA
            var productId = $(this).data('id');
            var productName = $(this).data('nombre');
            var productDescription = $(this).data('descripcion');
            var productPrice = $(this).data('precio');
            var productCategory = $(this).data('categoria');
            var productStatus = $(this).data('estado');

            //* CREACION DE LA TARJETA CON LOS DATOS OBTENIDOSM
            var productCard = `
            <div class="product-card" data-product-id="${productId}">
                <h3>${productName}</h3>
                <p>${productDescription}</p>
                <p>Price: ${productPrice}</p>
                <p>Category: ${productCategory}</p>
                <p>Status: ${productStatus}</p>
                <button class="add-to-favorites">Add to Favorites</button>
            </div>`;

            //* AGREGA LA TARJETA AL APARTADO DEFINIDO
            $('#cart-container').append(productCard);

            //*CONTROL DE ALAMCENAMIENTO EN LOCALSTORAGE
            storeProductInLocalStorage(productId, productName, productDescription, productPrice, productCategory, productStatus, );
        });

        //*  CONTROL DE BORRADO DE LA TARJETA
        $('#cart-container').on('click', '.delete-product', function() {
            //* OBTIENE EL ID DEL PRODUCTO
            var productId = $(this).closest('.product-card').data('product-id');

            //* ACCION PARA BORRAR LA TARJETA
            $(this).closest('.product-card').remove();

            //* ELIMINA LA INFORMACION DEL ALMACENAMIENTO LOCAL
            removeProductFromStorage(productId);
        });

        //* CARGA LA INFORMACION ALMACENADA EN EL LOCALSTORAGE
        loadProductsFromStorage();
    });

    function storeProductInLocalStorage(id, name, description, price, category, status, image) {
        var storedProducts = JSON.parse(localStorage.getItem('cart-products')) || [];

        //* VERIFICA SI EL ARTICULO YA ESTA EN EL LOALSTORAGE MEDIANTE EL ID
        var existingProductIndex = storedProducts.findIndex(product => product.id === id);

        if (existingProductIndex !== -1) {
            //* SI EL PRODUCTO EXISTE LO ELIMINA DEL APARTADO
            storedProducts.splice(existingProductIndex, 1);
        } else {
            //* DE LO CONTRARIO LO AGREGA
            storedProducts.push({
                id: id,
                name: name,
                description: description,
                price: price,
                category: category,
                status: status,
            });
        }

        //* ACTUALIZA EL ALMACENAMIENTO LOCAL
        localStorage.setItem('cart-products', JSON.stringify(storedProducts));
    }

    function removeProductFromStorage(productId) {
        var storedProducts = JSON.parse(localStorage.getItem('cart-products')) || [];

        //* Filtrar los productos para excluir el producto con el ID dado
        storedProducts = storedProducts.filter(product => product.id !== productId);

        //* ACTUALIZA LA INFORMACION DEL LOCALSTORAGE
        localStorage.setItem('cart-products', JSON.stringify(storedProducts));
    }

    function loadProductsFromStorage() {
        var storedProducts = JSON.parse(localStorage.getItem('cart-products')) || [];

        //* ITERA SOBRE LA TABLA Y AGREGA LAS TARJEAS AL CONTENEDOR
        storedProducts.forEach(product => {
            var productCard = `
            <div class="product-card" data-product-id="${product.id}">
                <h3>${product.name}</h3>
                <p>${product.description}</p>
                <p>Price: ${product.price}</p>
                <div class="pie-tarjeta">
                <a href="web/cmdDefaultEcommerce"><button class="add-to-favorites"><i class="fa fa-eye nav-icon"></i></button></a>
                    <button class="add-to-favorites"><i class="fa fa-heart nav-icon"></i></button>
                </div>
            </div>`;

            //* AGREGAR TARJETA AL CONTENEDOR
            $('#cart-container').append(productCard);
        });
    }
</script>

<!-- ////////////////////////////////////////// -->
<!-- ENVIO DE CATEGORIAS AL APARTADO DE CATEGORIAS -->

<script>
    $(document).ready(function() {

        //* CONTROL DE CLICK DEL BOTON
        $('.publicar-categoria').on('click', function() {
            //* VARIABLES PARA ALMCENAR LA INFORMACION OBTENIDA DE LA TABLA
            var categoriaId = $(this).data('id');
            var categoriaName = $(this).data('nombre');
            var categoriaDescription = $(this).data('descripcion');
            var categoriaStatus = $(this).data('estado');

            //* CREACION DE LA TARJETA CON LOS DATOS OBTENIDOS
            var categoriaCard = `
            <div class="categoria-card" data-categoria-id="${categoriaId}">
                <h3>${categoriaName}</h3>
                <p>${categoriaDescription}</p>
                <p>Status: ${categoriaStatus}</p>
                <button class="delete-categoria">Delete</button>
            </div>`;

            //* AGREGA LA TARJETA AL APARTADO DEFINIDO
            $('#cart-container').append(categoriaCard);

            //* CONTROL DE ALMACENAMIENTO EN LOCALSTORAGE
            storeCategoriaInLocalStorage(categoriaId, categoriaName, categoriaDescription, categoriaStatus);
        });

        //*  CONTROL DE BORRADO DE LA TARJETA
        $('#cart-container').on('click', '.delete-categoria', function() {
            //* OBTIENE EL ID DEL PRODUCTO
            var categoriaId = $(this).closest('.categoria-card').data('categoria-id');

            //* ACCION PARA BORRAR LA TARJETA
            $(this).closest('.categoria-card').remove();

            //* ELIMINA LA INFORMACION DEL ALMACENAMIENTO LOCAL
            removeCategoriaFromStorage(categoriaId);
        });

        //* CARGA LA INFORMACION ALMACENADA EN EL LOCALSTORAGE
        loadCategoriasFromStorage();
    });

    function storeCategoriaInLocalStorage(id, name, description, status) {
        var storedCategorias = JSON.parse(localStorage.getItem('cart-categorias')) || [];

        //* VERIFICA SI LA CATEGORIA YA ESTA EN EL LOALSTORAGE MEDIANTE EL ID
        var existingCategoriaIndex = storedCategorias.findIndex(categoria => categoria.id === id);

        if (existingCategoriaIndex !== -1) {
            //* SI LA CATEGORIA EXISTE, LO ELIMINA DEL APARTADO
            storedCategorias.splice(existingCategoriaIndex, 1);
        } else {
            //* AGREGA LA CATEGORIA
            storedCategorias.push({
                id: id,
                name: name,
                description: description,
                status: status,
            });
        }
        //* ACTUALIZA EL ALMACENAMIENTO LOCAL
        localStorage.setItem('cart-categorias', JSON.stringify(storedCategorias));
    }

    function removeCategoriaFromStorage(categoriaId) {
        var storedCategorias = JSON.parse(localStorage.getItem('cart-categorias')) || [];

        //* FILTRA LAS CATEGORIAS EXCLUYENDO LA CATEGORIA CON EL ID DADO
        storedCategorias = storedCategorias.filter(categoria => categoria.id !== categoriaId);

        //* ACTUALIZA LA INFORMACION DEL LOCALSTORAGE
        localStorage.setItem('cart-categorias', JSON.stringify(storedCategorias));
    }

    function loadCategoriasFromStorage() {
        var storedCategorias = JSON.parse(localStorage.getItem('cart-categorias')) || [];

        //* ITERA SOBRE LAS CATEGORIAS Y AGREGA LAS TARJETAS AL CONTENEDOR
        storedCategorias.forEach(categoria => {
            var categoriaCard = `
            <div class="categoria-card" data-categoria-id="${categoria.id}">
                <h3>${categoria.name}</h3>
                <p>${categoria.description}</p>
                <div class="pie-tarjeta">
                <button></button>
                </div>
            </div>`;

            //* AGREGAR TARJETA AL CONTENEDOR
            $('#cart-container').append(categoriaCard);
        });
    }
</script>