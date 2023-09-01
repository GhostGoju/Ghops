<?php

class cmdEliminarUsuarios
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        valid_method($this->default_request_method);

        if (is_array($params))
            $id = $params[0];

        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->eliminar($id);
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
                    "message" => "Usuario existente con el mismo id",
                    "view" => "usuarios/listadoUsuarios"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Usuario no eliminado",
                    "view" => "usuarios/listadoUsuarios"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Usuario eliminado correctamente",
                    "view" => "usuarios/listadoUsuarios"
                ];
                break;
        }
        return $response;
    }
}
