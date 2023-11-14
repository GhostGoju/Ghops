<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrarse</title>

    <?php require_once INCLUDES_TEMPLADE . "header.php"; ?></php>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline">
            <div class="card-header text-center">
                <img src="public/img/logos/pic.png" class="logo-login"> <a class="h1"><b>GH</b>OPS</a>
            </div>

            <div class="card-body">
                <div class="text-login">
                    <p>Crear una Cuenta</p>
                </div>
                <form action="web/cmdFormularioNuevosUsuarios" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="apellidos" placeholder="Apellido">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" name="rol" id="rol" value="2">
                    <input type="hidden" class="form-control" name="estado" id="estado" value="1">
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                        </div>
                    </div>
                </form>
                <p class="mb-0">
                    <a href="web/cmdDefaultLogin">Ya tengo una cuenta</a>
                </p>
            </div>
        </div>
    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>