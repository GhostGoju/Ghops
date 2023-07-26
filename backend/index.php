<?php

require_once "bd/conection.php";
require_once "modelo/usuarios_modelo.php";

extract($_REQUEST);
// print_r("<pre>");
// print_r($_REQUEST);

if(!isset($action)) {
    print_r("No se ha enviado ningun elemento a ejecutar");
    exit();
} else {
    switch($action) {
        case "consultarUsuarios":
            print_r("voy a consultar usuarios");

            $u = new usuarios_modelo();

            $misDatos = $u->getAllUsuarios();

            print_r("<pre>");
            print_r($misDatos);

            break;

        case "buscarUsuarios":
            print_r("voy a buscar un usuario");
            
            $u = new usuarios_modelo();

            $misDatos = $u->getById($id);
            
            print_r("<pre>");
            print_r($misDatos);
            break;

        default:
            print_r("Peticion invalida");

    }
}
