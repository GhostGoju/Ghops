<!DOCTYPE html>
<html lang="en">

<?php require_once INCLUDES_TEMPLADE . "header.php"; ?></php>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>
        <?php require_once INCLUDES_TEMPLADE . "aside.php"; ?></php>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            </section>
            <section class="content">


                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            <div class="form-group">
                                <label>Nombre Producto</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span><?php echo $d->data[0]->descripcion; ?></li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="<?php echo $d->data[0]->imagen; ?>" alt="img-producto" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-cart-plus"></i> Carrito
                                </a>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-heart"></i> Favoritos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- <div class="container">
                    <div class="row" id="tarjetasContainer">

                        <form id="miFormulario">
                            <input type="text" id="nombreProducto" placeholder="Nombre del Producto">
                            <input type="text" id="descripcionProducto" placeholder="Descripción del Producto">
                            <input type="file" id="imagenProducto" accept="image/*">
                            <button type="button" onclick="mostrarTarjeta()">Mostrar Tarjeta</button>
                        </form>

                    </div>
                </div> -->







            </section>
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?></php>
    </div>

    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>

    <!-- <script>
        function mostrarTarjeta() {
            // Obtener los valores ingresados en el formulario
            const nombreProducto = document.getElementById('nombreProducto').value;
            const descripcionProducto = document.getElementById('descripcionProducto').value;
            const imagenProductoInput = document.getElementById('imagenProducto');

            // Crear una nueva tarjeta
            const tarjetaClonada = document.querySelector('.col-12.col-sm-6.col-md-4.d-flex.align-items-stretch.flex-column').cloneNode(true);

            // Actualizar los elementos dentro de la tarjeta con los valores del formulario
            tarjetaClonada.querySelector('.card-header label').textContent = nombreProducto;
            tarjetaClonada.querySelector('.fa-ul.text-muted li').textContent = descripcionProducto;

            // Manejar la carga de la imagen seleccionada
            const imagenProducto = tarjetaClonada.querySelector('.img-circle.img-fluid');
            const file = imagenProductoInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagenProducto.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }

            // Agregar la tarjeta clonada al contenedor de tarjetas
            const tarjetasContainer = document.getElementById('tarjetasContainer');
            tarjetasContainer.appendChild(tarjetaClonada);
        }
    </script> -->

</body>

</html>