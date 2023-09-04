<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <?php require_once INCLUDES_TEMPLADE . "header.php"; ?></php>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>

        <!-- Default box -->
        <div class="card">
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                    <div class="">
                        <div class="text-center">
                            <img src="public/img/logos/marca (4).png" alt="Ghops Logo" class="brand-image img-" style="opacity: .8">
                        </div>
                        <h2>GH<strong>OPS</strong></h2>
                        <p class="lead mb-5">GHOPS - Digital Store<br>
                            Telefono: +57 123123123
                        </p>
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-group">
                        <label for="inputName">Nombre</label>
                        <input type="text" id="inputName" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">E-Mail</label>
                        <input type="email" id="inputEmail" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Asunto</label>
                        <input type="text" id="inputSubject" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Mensaje</label>
                        <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
    <!-- Page specific script -->
</body>

</html>