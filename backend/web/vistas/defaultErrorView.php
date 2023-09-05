<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <?php require_once INCLUDES_TEMPLADE . "header.php"; ?></php>
</head>

<body>
    <!-- Main content -->
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-danger">500</h2>

            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-danger"></i> Error en los pits</h3>
                <p>
                    <?php echo $d->message; ?>
                </p>
            </div>
        </div>
        <!-- /.error-page -->
    </section>
    <!-- /.content -->
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>