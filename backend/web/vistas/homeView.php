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
        <div class="h-100">

            <section class="listado-header">
                <p>Home</p>
            </section>


            <!-- CONTENIDO GENERAL -->
            <script>
                function cargarImagenDeUsuario(idElementoImagen) {
                    const imgElement = document.querySelector(`#${idElementoImagen}`);
                    const urlDeLaImagen = "ruta_a_la_imagen_del_usuario.jpg"; // Debes obtener esta URL desde tu base de datos o servidor
                    imgElement.src = urlDeLaImagen;
                }

                document.addEventListener("DOMContentLoaded", function() {
                    // Llama a la función para cargar la imagen del usuario
                    cargarImagenDeUsuario("imagen-usuario");
                });
            </script>

            <?php
            cargarImagenDeUsuario("otro-elemento-imagen");
            ?>





            <!-- CONTENIDO GENERAL -->


            <!-- CONTENEDOR DE DATOS (PRUEBA) -->
            <!-- <?php
                    echo "Rol: " . $_SESSION['rol'];
                    echo "Nombre: " . $_SESSION['nombre'];
                    echo "Apellidos: " . $_SESSION['apellidos'];
                    echo "Email: " . $_SESSION['email'];
                    echo "Estado: " . $_SESSION['estado'];
                    echo "Telefono: " . $_SESSION['telefono'];
                    echo "Pais: " . $_SESSION['pais'];
                    echo "Municipio: " . $_SESSION['municipio'];
                    echo "Direccion: " . $_SESSION['direccion'];
                    ?> -->
            <!-- /CONTENEDOR DE DATOS (PRUEBA) -->
        </div>
        <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?>
    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?>
</body>

</html>