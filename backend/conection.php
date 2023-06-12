<?php


$servername = "localhost"; // Cambia "localhost" si el servidor de la base de datos no está en la misma máquina
$username = "root";
$password = "Qwe.proyectoSena";
$database = "bdproyectosena";

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

echo "Conexión exitosa";
?>
