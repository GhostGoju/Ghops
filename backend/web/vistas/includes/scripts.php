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


<!-- ENVIO DE PRODUCTOS AL HOME -->

<script>
    $(document).ready(function() {

        $('.publicar-producto').on('click', function() {
            var productId = $(this).data('id');
            var productName = $(this).data('nombre');
            var productDescription = $(this).data('descripcion');
            var productPrice = $(this).data('precio');
            var productCategory = $(this).data('categoria');
            var productStatus = $(this).data('estado');

            var productCard = `
        <div class="product-card" data-product-id="${productId}">
            <h3>${productName}</h3>
            <p>${productDescription}</p>
            <p>Price: ${productPrice}</p>
            <p>Category: ${productCategory}</p>
            <p>Status: ${productStatus}</p>
            <div class="pie-tarjeta">
                <button class="add-to-favorites" onclick="addToFavorites(${productId}, '${productName}', '${productDescription}', ${productPrice}, '${productCategory}', '${productStatus}')">
                    <i class="fa fa-heart nav-icon"></i>
                </button>
            </div>
        </div>`;

            $('#cart-container').append(productCard);
            storeProductInLocalStorage(productId, productName, productDescription, productPrice, productCategory, productStatus);
        });

        $('#cart-container').on('click', '.delete-product', function() {
            var productId = $(this).closest('.product-card').data('product-id');
            $(this).closest('.product-card').remove();
            removeProductFromStorage(productId);
        });

        loadProductsFromStorage();
        loadFavoritesFromStorage(); // Agregado para cargar productos favoritos al cargar la página
    });

    function storeProductInLocalStorage(id, name, description, price, category, status) {
        var storedProducts = JSON.parse(localStorage.getItem('cart-products')) || [];
        var existingProductIndex = storedProducts.findIndex(product => product.id === id);

        if (existingProductIndex !== -1) {
            storedProducts.splice(existingProductIndex, 1);
        } else {
            storedProducts.push({
                id: id,
                name: name,
                description: description,
                price: price,
                category: category,
                status: status,
            });
        }

        localStorage.setItem('cart-products', JSON.stringify(storedProducts));
    }

    function removeProductFromStorage(productId) {
        var storedProducts = JSON.parse(localStorage.getItem('cart-products')) || [];
        storedProducts = storedProducts.filter(product => product.id !== productId);
        localStorage.setItem('cart-products', JSON.stringify(storedProducts));
    }

    function addToFavorites(id, name, description, price, category, status) {
        var storedFavorites = JSON.parse(localStorage.getItem('favorite-products')) || [];
        var existingProductIndex = storedFavorites.findIndex(product => product.id === id);

        if (existingProductIndex === -1) {
            // Si el producto no está en favoritos, agrégalo
            storedFavorites.push({
                id: id,
                name: name,
                description: description,
                price: price,
                category: category,
                status: status,
            });
        } else {
            // Si el producto ya está en favoritos, elimínalo
            storedFavorites.splice(existingProductIndex, 1);
        }

        localStorage.setItem('favorite-products', JSON.stringify(storedFavorites));
        loadFavoritesFromStorage();
    }

    function loadFavoritesFromStorage() {
        var storedFavorites = JSON.parse(localStorage.getItem('favorite-products')) || [];
        $('#favorites-container').empty();

        storedFavorites.forEach(product => {
            var productCard = `
<div class="product-card" data-product-id="${product.id}">
    <h3>${product.name}</h3>
    <p>${product.description}</p>
    <p>Price: ${product.price}</p>
    <p>Category: ${product.category}</p>
    <p>Status: ${product.status}</p>
</div>`;

            $('#favorites-container').append(productCard);
        });
    }

    function loadProductsFromStorage() {
        var storedProducts = JSON.parse(localStorage.getItem('cart-products')) || [];
        storedProducts.forEach(product => {
            var productCard = `
            <div class="product-card" data-product-id="${product.id}">
                <h3>${product.name}</h3>
                <p>${product.description}</p>
                <p>Price: ${product.price}</p>
                <div class="pie-tarjeta">
                    <button class="add-to-favorites" onclick="addToFavorites(${product.id}, '${product.name}', '${product.description}', ${product.price}, '${product.category}', '${product.status}')">
                        <i class="fa fa-heart nav-icon"></i>
                    </button>
                </div>
            </div>`;
            $('#cart-container').append(productCard);
        });
    }
</script>

<!-- <!--ENVIO DE CATEGORIAS AL APARTADO DE CATEGORIAS-- > -->

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
            </div>`;

            //* AGREGA LA TARJETA AL APARTADO DEFINIDO
            $('#cart-container-categorias').append(categoriaCard);

            //* CONTROL DE ALMACENAMIENTO EN LOCALSTORAGE
            storeCategoriaInLocalStorage(categoriaId, categoriaName, categoriaDescription, categoriaStatus);
        });

        //*  CONTROL DE BORRADO DE LA TARJETA
        $('#cart-container-categorias').on('click', '.delete-categoria', function() {
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
                <button class="add-to-favorites"><i class="fa fa-arrow-right nav-icon"></i></button>
                </div>
            </div>`;

            //* AGREGAR TARJETA AL CONTENEDOR
            $('#cart-container-categorias').append(categoriaCard);
        });
    }
</script>


<!-- PUBLICAR ANUNCIOS DENTRO DE LA PAGINA -->

<script>
    $(document).ready(function() {

        //* CONTROL DE CLICK DEL BOTON
        $('.publicar-anuncio').on('click', function() {
            //* VARIABLES PARA ALMCENAR LA INFORMACION OBTENIDA DE LA TABLA
            var anuncioId = $(this).data('id');
            var anuncioDescription = $(this).data('descripcion');

            //* CREACION DE LA TARJETA CON LOS DATOS OBTENIDOS
            var anuncioCard = `
            <div class="anuncio-card" data-anuncio-id="${anuncioId}">
                <p>${anuncioDescription}</p>
            </div>`;

            //* AGREGA LA TARJETA AL APARTADO DEFINIDO
            $('#cart-container-anuncios').append(anuncioCard);

            //* CONTROL DE ALMACENAMIENTO EN LOCALSTORAGE
            storeAnuncioInLocalStorage(anuncioId, anuncioDescription);
        });

        //*  CONTROL DE BORRADO DE LA TARJETA
        $('#cart-container-anuncio').on('click', '.delete-anuncio', function() {
            //* OBTIENE EL ID DEL PRODUCTO
            var anuncioId = $(this).closest('.anuncio-card').data('anuncio-id');

            //* ACCION PARA BORRAR LA TARJETA
            $(this).closest('.anuncio-card').remove();

            //* ELIMINA LA INFORMACION DEL ALMACENAMIENTO LOCAL
            removeAnuncioFromStorage(anuncioId);
        });

        //* CARGA LA INFORMACION ALMACENADA EN EL LOCALSTORAGE
        loadAnunciosFromStorage();
    });

    function storeAnuncioInLocalStorage(id, description) {
        var storedAnuncios = JSON.parse(localStorage.getItem('cart-anuncios')) || [];

        //* VERIFICA SI LA CATEGORIA YA ESTA EN EL LOALSTORAGE MEDIANTE EL ID
        var existingAnuncioIndex = storedAnuncios.findIndex(anuncio => anuncio.id === id);

        if (existingAnuncioIndex !== -1) {
            //* SI LA CATEGORIA EXISTE, LO ELIMINA DEL APARTADO
            storedAnuncios.splice(existingAnuncioIndex, 1);
        } else {
            //* AGREGA LA CATEGORIA
            storedAnuncios.push({
                id: id,
                description: description,
            });
        }
        //* ACTUALIZA EL ALMACENAMIENTO LOCAL
        localStorage.setItem('cart-anuncios', JSON.stringify(storedAnuncios));
    }

    function removeAnuncioFromStorage(anuncioId) {
        var storedAnuncios = JSON.parse(localStorage.getItem('cart-anuncios')) || [];

        //* FILTRA LAS CATEGORIAS EXCLUYENDO LA CATEGORIA CON EL ID DADO
        storedAnuncios = storedAnuncios.filter(anuncio => anuncio.id !== anuncioId);

        //* ACTUALIZA LA INFORMACION DEL LOCALSTORAGE
        localStorage.setItem('cart-anuncios', JSON.stringify(storedAnuncios));
    }

    function loadAnunciosFromStorage() {
        var storedAnuncios = JSON.parse(localStorage.getItem('cart-anuncios')) || [];

        //* ITERA SOBRE LAS CATEGORIAS Y AGREGA LAS TARJETAS AL CONTENEDOR
        storedAnuncios.forEach(anuncio => {
            var anuncioCard = `
            <div class="anuncio-card" data-anuncio-id="${anuncio.id}">
                <p>${anuncio.description}</p>
                <div class="pie-tarjeta">
                </div>
            </div>`;

            //* AGREGAR TARJETA AL CONTENEDOR
            $('#cart-container-anuncios').append(anuncioCard);
        });
    }
</script>
<!-- ENVIO DE LOS PRODUCTOS A FAVORITOS -->


<!-- ENVIO DE LOS PRODUCTOS A CARRITO -->