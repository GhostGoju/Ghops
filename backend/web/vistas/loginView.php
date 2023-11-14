<!DOCTYPE html>
<html lang="en">

<?php require_once INCLUDES_TEMPLADE . "header.php"; ?></php>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline">
            <div class="card-header text-center">
                <img src="public/img/logos/pic.png" class="logo-login"> <a class="h1"><b>GH</b>OPS</a>
            </div>

            <div class="card-body">
                <div class="text-login">
                    <p>Iniciar Sesion</p>
                </div>

                <form action="web/cmdAutenticar" method="POST">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                    </div>
                </form>


                <p class="mb-0">
                    <a href="<?php echo URL; ?>web/cmdDefaultRecuperarpassword" class="link-enter">Olvide mi contraseña</a>
                </p>
                <p class="mb-0">
                    <a href="<?php echo URL; ?>web/cmdDefaultFormulario" class="link-enter">Registrarse</a>
                </p>
            </div>
        </div>
    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>