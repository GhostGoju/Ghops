<?php

class cmdRegistrar
{
    public function execute()
    {
        extract($_REQUEST);

        $u = new usuariosControl();
        $result = $u->registrar($email, $password, $nombre, $estado, $rol);
        switch ($result) {
            case 0:                                                 //* FALTAN DATOS
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "faltan datos"
                ];
                break;
            case 1:                                                 //* USUARIO YA EXISTENTE CON EL MISMO EMAIL
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "Usuario existente con el mismo email"
                ];
                break;
            case 2:                                                 //* USUARIO NO CREADO
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "Usuario no creado"
                ];
                break;
            case 3:                                                 //*USUARIO CREADO
                $response = [
                    "result" => "ok",
                    "data" => "$result",
                    "message" => "Usuario creado correctamente"
                ];
                break;
        }
        if (!CALL_API == true)
            $response["view"] = "usuarios/edit";
        return $response;
    }
}
