<?php

//* EL INDEX RECIBE LAS DIFERENTES PETICIONES Y LAS REDIRECCIONA AL FRONTCONTROLLER

require_once ".autoloader";
require_once ".frontController";

$proccess = new frontController();                            //*OBJETO de la clase frontcontroller
$proccess->proccessRequest();                                 //*INVOCAMOS DE ESE OBJETO EL METODO PROCCESS...
