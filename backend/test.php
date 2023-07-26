<?php

require_once "bd/conection.php";
require_once "modelo/usuarios_modelo.php";


// $c= new mysql();
// $c->conectar();
// print_r("<pre>");
// print_r($c);

$u = new usuarios_modelo();
$misDatos = $u->getAllUsuarios();

print_r("<pre>");
print_r($misDatos);



?>
