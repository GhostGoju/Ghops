<!DOCTYPE html>
<html lang="en">

<?php require_once INCLUDES_TEMPLADE . "header.php"; ?></php>

<body class="hold-transition login-page">

    <div class="login-box">
        <div class="card card-outline">
            <div class="card-header text-center">
                <img src="public/img/logos/pic.png" class="logo-login"> <a class="h1"><b>GH</b>OPS</a>
            </div>
            <div class="card-body">
                <div class="text-login">
                    <p>Olvisdaste tu contraseña? Aqui podas recuperarla facilmente</p>
                </div>
                <form action="recover-password.html" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Solicitar nueva contraseña</button>
                        </div>
                    </div>
                </form>
                <p class="mb-0">
                    <a href="web/cmdDefaultLogin">Iniciar Sesion</a>
                </p>
            </div>
        </div>
    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>