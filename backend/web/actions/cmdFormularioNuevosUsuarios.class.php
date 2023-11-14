<?php

class cmdFormularioNuevosUsuarios
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);

        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->formularioNuevosUsuarios($nombre, $apellidos, $email, $password, $rol, $estado);
        switch ($result) {
            case 0:
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "faltan datos",
                    "view" => "formularioUsuarios"
                ];
                break;
            case 1:
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "Usuario existente con el mismo email",
                    "view" => "formularioUsuarios"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "Usuario no creado",
                    "view" => "formularioUsuarios"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => "",
                    "message" => "Usuario creado correctamente",
                    "view" => "home"
                ];
                break;
        }
        return $response;
    }
}
