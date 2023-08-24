<?php

class cmdModificarPassword        //*(BUSCAR SOLUCION)
{
    public function execute()                         //* UNICO METODO DE LA CLASE
    {
        extract($_REQUEST);

        $u = new usuariosControl();
        $result = $u->updatePassword($id, $password);
        switch ($result) {
            case 0;                                                 //* FALTAN DATOS
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "faltan datos"
                ];
                break;
            case 1:                                                 //* PASSWORD YA EXISTENTE
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "Usuario existente con la  misma contrasena"
                ];
                break;
            case 2:                                                 //* PASSWORD NO CREADO
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "contrasena no actualizada"
                ];
                break;
            case 3:                                                 //*PASSWORD CREADO
                $response = [
                    "result" => "ok",
                    "data" => "$result",
                    "message" => "Contrasena actualizada"
                ];
                break;
        }
        print_r(json_encode($response));
    }
}