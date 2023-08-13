<?php

//* ESTE DOCUMENTO RECIBE PETICIONES QUE VIENEN DE AFUERA

require_once ".autoloader";


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
    print_r("No hay ningun evento a ejecutar");                           //* MESAJE DE ENTRADA PARA QUE SE INSERTEN ACCIONES A EJECUTAR
    // require_once "vistas/login.php";                                         //* ESTA ES LA PAGINA PREDETERMINADA A LA CUAL ENTRARAN LOS USUARIOS
    exit();
} else {
    switch ($action) {

            //? (FUNCION DE (INICIO DE SESION) VALIDAR ESTA ACCION)
        case "autenticar":
            $u = new usuariosControl();
            $result = $u->autenticar($email, $password);                //* RESULT ALMACENA LA INFORMACION QUE TRAIGAN LAS VARIABLES EMAIL AND PASSWORD
            if (is_array($result)) {
                $response = [
                    "result" => "ok",
                    "data" => $result,
                    "message" => "Usuario valido"
                ];
                // require 'vistas/home.php';                                            //* AQUI ENCUENTRA AL USUARIO Y REDIRIGE AL HOME DE LA PAGINA
            }
            if ($result == 0) {
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "Faltan datos"
                ];

                // require 'vistas/login.php';                                    //* CUANDO SE LLENA EL FORMULARIO Y NO SE ENCUENTRAN TODOS LOS DATOS EL API REEVIA AL USUARIO A LA PAGINA DE LOGIN
            }
            if ($result == 1) {
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "Usuario invalido"
                ];
                // require 'vistas/login.php';                                        //* CUANDO SE LLENA EL FORMULARIO Y NO COINCIDEN LOS DATOS EL API REEVIA AL USUARIO A LA PAGINA DE LOGIN
            }
            print_r("<pre>");
            print_r($response);
            break;


            //? (FUNCION DE TRAER TODA LA LISTA DE USUARIOS)
        case "consultarUsuarios":                                  //* CUSNDO VENGA CONSULTAR USUARIOS
            print_r("Voy a consultar un usuario");
            $u = new usuariosControl();                            //* CREA UN OBJETO DEL CONTROL DE USUARIOS
            $result = $u->listarUsurios();                     //* EJECUTA EL METODO DEL OBJETO (LISTARUSUARIOS)
            print_r("<pre>");
            print_r($result);                                   //* SE IMPRIMEN LOS DATOS QUE TIENE $U
            break;


            //? (FUNCION DE BUSCAR UN USUARIO MEDIANTE SU ID)
        case "buscarUsuarios":
            // print_r("Voy a buscar un usuario");
            $u = new usuariosControl();
            $result = $u->buscarUsuarios($id);
            if (is_array($result)) {
                $response = [
                    "result" => "ok",
                    "data" => $result,
                    "message" => "Usuario encontrado"
                ];
            }
            if ($result == 0) {
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "Faltan datos"
                ];
            }
            if ($result == 1) {
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "Usuario no encontrado"
                ];
            }
            break;


            //? (FUNCION DE INSERTAR NUEVO USUARIO)
        case 'registrar';
            $u = new usuariosControl();
            $result = $u->registrar($email, $password, $nombre, $estado);
            switch ($result) {
                case 0;                                                 //* FALTAN DATOS
                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "faltan datos"
                    ];
                    break;
                case 1;                                                 //* USUARIO YA EXISTENTE CON EL MISMO EMAIL
                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "Usuario existente con el mismo email"
                    ];
                    break;
                case 2;                                                 //* USUARIO NO CREADO
                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "Usuario no creado"
                    ];
                    break;
                case 3;                                                 //*USUARIO CREADO
                    $response = [
                        "result" => "ok",
                        "data" => "$result",
                        "message" => "Usuario creado correctamente"
                    ];
                    break;
            }


            //? (CASO DE USO DE ACTUALIZAR USUARIOS)
        case ' modifiarUsuarios';
            $u = new usuariosControl();
            $result = $u->modifiarUsuarios($id, $email, $nombre, $estado);
            switch ($result) {
                case 0;                                                 //* FALTAN DATOS
                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "faltan datos"
                    ];
                    break;
                case 1;                                                 //* USUARIO YA EXISTENTE CON EL MISMO EMAIL
                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "Usuario existente con el mismo email"
                    ];
                    break;
                case 2;                                                 //* USUARIO NO CREADO
                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "Usuario no creado"
                    ];
                    break;
                case 3;                                                 //*USUARIO CREADO
                    $response = [
                        "result" => "ok",
                        "data" => "$result",
                        "message" => "Usuario creado correctamente"
                    ];
                    break;
            }


        //     ? (ACTUALIZAR PASSWORD)
        // case 'cambiarPassword';
        //     $u = new usuariosControl();
        //     $result = $u->cambiarPassword($id, $password);
        //     switch ($result) {
        //         case 0;                                                 //* FALTAN DATOS
        //             $response = [
        //                 "result" => "bad",
        //                 "data" => "",
        //                 "message" => "faltan datos"
        //             ];
        //             break;
        //         case 1;                                                 //* USUARIO YA EXISTENTE CON EL MISMO EMAIL
        //             $response = [
        //                 "result" => "bad",
        //                 "data" => "",
        //                 "message" => "La contraseña no puede ser igual a la anterior"
        //             ];
        //             break;
        //         case 2;                                                 //* USUARIO NO CREADO
        //             $response = [
        //                 "result" => "bad",
        //                 "data" => "",
        //                 "message" => "Usuario no creado"
        //             ];
        //             break;
        //         case 3;                                                 //*USUARIO CREADO
        //             $response = [
        //                 "result" => "ok",
        //                 "data" => "$result",
        //                 "message" => "contraseña actualizada"
        //             ];
        //             break;
        //     }





            print_r("<pre>");
            print_r($response);
            break;

        default:
            print_r("No se envio ningun parametro");
    }
}
