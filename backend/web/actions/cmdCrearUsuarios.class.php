<?php

class cmdCrearUsuarios
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);

        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->registrar($email, $password, $nombre, $estado, $rol);
        $datos = $u->listarUsurios();

        switch ($result) {
            case 0:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "faltan datos",
                    "view" => "usuarios/listadoUsuarios"
                ];
                break;
            case 1:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Usuario existente con el mismo email",
                    "view" => "usuarios/listadoUsuarios"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Usuario no creado",
                    "view" => "usuarios/listadoUsuarios"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Usuario creado correctamente",
                    "view" => "usuarios/listadoUsuarios"
                ];
                break;
        }
        return $response;
    }
}
