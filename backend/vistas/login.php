<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <h1>LOGIN DE LA PAGINA</h1>

    <form name="autenticar" action="" method="post">

        <div class="modelo">
            <label for="" class="">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Ingresar Email">         <!-- EL NAME DENTROA DE ESTOS ATRIBUTOS SE UTILIZA PARA IDENTIFICARLO DENTRO DE LAS ACCIONES URL-->
        </div>

        <div class="modelo">
            <label for="" class="">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Ingresar Password">         <!-- EL NAME DENTROA DE ESTOS ATRIBUTOS SE UTILIZA PARA IDENTIFICARLO DENTRO DE LAS ACCIONES URL-->
        </div>

        <input type="submit" value="Login">              <!-- SUBMIT ES ENVIAR  -->
        <input type="hidden" name="action" value="autenticar">              <!-- HIDDEN ES OCULTO --- NAME LLEVA EL PARAMETRO QUE VA A RECIBIR LA INFORMACION    -->
    </form>











</body>

</html>