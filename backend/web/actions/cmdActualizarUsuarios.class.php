<?php

class cmdActualizarusuarios
{
    private $default_request_method = "POST";
    public function execute()
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->modificarUsuarios($id, $email, $nombre, $estado, $rol);
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
                    "message" => "Usuario no actualizado",
                    "view" => "usuarios/listadoUsuarios"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Usuario actualizado correctamente",
                    "view" => "usuarios/listadoUsuarios"
                ];
                break;
        }
        return $response;
    }
}
