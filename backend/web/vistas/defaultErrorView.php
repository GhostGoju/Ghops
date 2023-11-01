<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once INCLUDES_TEMPLADE . "header.php"; ?>
    <title>Error</title>
</head>

<body>

    <section class="content-error">
        <div class="error-page">
            <h2 class="headline text-warning">404</h2>

            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! parece que algo salio mal</h3>

                <p>
                    Parece que hay un problema con tu cuenta.
                    <br>
                    Puedes <b><a href="web/cmdDefaultLogin">reintentar</a></b> o contactar con <b><a href="#">Servicio tecnico</a></b>
                </p>
            </div>
        </div>
    </section>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?>
</body>

</html>