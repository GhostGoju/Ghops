<?php session_start();

if (!isset($_SESSION['rol'])) {
    header("Location: cmdDefaultLogin");
    exit;
}
require_once INCLUDES_TEMPLADE . "header.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?></php>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once INCLUDES_TEMPLADE . "header.php"; ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>
        <?php if ($_SESSION['rol'] == 1) {
            require_once INCLUDES_TEMPLADE . "aside.php";
        } ?></php>
        <div class="content-wrapper">
            <section class="content-header">
                <H5>CATEGORIAS</H5>
            </section>
        </div>
        <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?></php>
    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>