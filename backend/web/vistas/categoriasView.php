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
    <title>Categorias</title>
</head>

<body class="contenido">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?>
        <div class="h-100">

            <section class="listado-header">
                <p>Categorias</p>
            </section>







        </div>
        <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?>
    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?>
</body>

</html>