<?php

//* ESTE DOCUMENTO RECIBE PETICIONES QUE VIENEN DE AFUERA

require_once "bd/mysql.php";
require_once "modelo/usuariosModelo.php";


extract($_REQUEST);                    //* ESTO EXTRAE LAS PETICIONES DE LOS USUARIOS
// print_r("<pre>");
// print_r($_REQUEST);

//* LOS DATOS QUE EXTRAIDO DE LOS USUARIOS EN LA URL SE CONVIERTEN EN DATOS LOS CUALES PUEDO CONSULTAR DENTRO DE LA VARIABLE ACTION, QUE ES DONDE
//* SE ALMACENA ESA INFORMACION

// print_r($action);
// print_r("<br>");
// print_r($otro);


//* ISSET ES UNA FUNCION QUE VALIDA SI DENTRO DE LA FUNCION VIENE CON ALGUN VALOR. DE ESTA FORMA PODEMOS DAR INSTRUCCIONES SI VIENE O NO.

if (!isset($action)) {
    print_r("No se ha calidado un eventoa ejecutar");
    exit();
} else {
    switch ($action) {
        case "consultarUsuarios":                                  //* CUSNDO VENGA CONSULTAR USUARIOS
            print_r("Voy a consultar un usuario");

            $u = new usuariosModelo();                            //* CREA UN OBJETO DEL MODELO DE USUARIOS
            $misDatos = $u->getAllUsuarios();                     //* EJECUTA EL METODO DEL OBJETO GETALLUSUARIOS
            print_r("<pre>");
            print_r($misDatos);                                   //* SE IMPRIMEN LOS DATOS QUE TIENE $U

            break;

        case "buscarUsuarios":
            print_r("Voy a buscar un usuario");

            $u = new usuariosModelo();
            $misDatos = $u->getById($id);
            print_r("<pre>");
            print_r($misDatos);

            break;

        default:
            print_r("No se envio ningun parametro");
    }
}
