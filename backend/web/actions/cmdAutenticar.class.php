<?php

class cmdAutenticar
{

    public function execute()                         //* UNICO METODO DE LA CLASE
    {
        extract($_REQUEST);                                           //* LOS DATOS QUE SE NECESITAN PARA EJECUTAR LAS ACCIONES SE EXTRAEN DE REQUEST

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
        print_r(json_encode($response));
    }
}