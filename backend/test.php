<?php

use LDAP\Result;

require_once "bd/mysql.php";  //* ESTA ES LA CONEXION ENTRE DOCUMENTOS
require_once "modelo/usuariosModelo.php";


//* -----------------------------------------------------------

//! EJEMPLOS DE USO
// $C = new dataBase();          //*AQUI SE INSTANCIA UN OBJETO DE CONEXION CON LA CLASE QUE SE ENCUENTRA DENTRO DEL DOCUMENTO MUSQL
                              //* $c ES UN OBJETO O VARIABLE DE dataBase, (LA CONSTRUCCION DEL PLANO).

// $C->conectar();              //*SI SE LOGRA LA CONEXION. C TIENE ACCESO A LA BASE DE DATOS

// print_r("<pre>");            //* DATAR MEJOR PRESENTACION A LOS DATOS
// print_r($C);                 //* IMPRIMIR EN PANTALLA LOS DATOS QUE CONTIENE C, LOS CUALES SERIA LOS DE LA CLASE DATABASE

//* -----------------------------------------------------------

$u = new usuariosModelo();           //* OBJETO QUE NACE Y YA TIENE FUNCIONES INTERNAS DOC.(USUARIOSMODELO)


$misDatos = $u-> getAllUsuarios();       //* VARIABLE EN LA CUAL GUARDO LA INFORMACION QUE $U TRAIGA Y DISPARO LA FUNCION GETALLUSUARIOS. GUARDADO EN EL DOCUMENTO USUARIOSMODELO
print_r("<pre>");
print_r($misDatos);


$resultado = $u->getById(3);            //* $RESULTADO ES UN OBJETO QUE NACE Y ES IGUAL $u, QUE TRAE TODOS LOS USUARIOS. Y LA FUNCION GETBYID ME PERMITE CONSULTAR USUARIOS POR SU ID
print_r("<pre>");
print_r($resultado);