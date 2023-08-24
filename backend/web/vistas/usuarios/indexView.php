<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuarios</title>
</head>

<body>
    <center><h1>Listado de usuarios</h1></center>

    <table border="1px">

        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Password</th>
            <th>Estado</th>
        </thead>

        <tbody>
            <?php
            foreach ($d->data as $usuario) {
                print_r("<tr>");

                print_r("<td>$usuario->id</td>");
                print_r("<td> $usuario->nombre</td>");
                print_r("<td> $usuario->email</td>");
                print_r("<td> $usuario->password</td>");
                print_r("<td> $usuario->estado</td>");

                print_r("<tr>");
            }
            ?>
        </tbody>
    </table>




</body>

</html>