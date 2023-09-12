<!DOCTYPE html>
<html lang="en">

<?php require_once INCLUDES_TEMPLADE . "header.php"; ?></php>

<body class="hold-transition login-page">

    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1"><b>GH</b>OPS</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Olvisdaste tu contraseña? Aqui podas recuperarla facilmente</p>
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
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="web/cmdDefaultLogin">Iniciar Sesion</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>


    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>