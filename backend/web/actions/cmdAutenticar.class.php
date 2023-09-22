<?php

class cmdAutenticar
{
    private $default_request_method = "POST";
    public function execute()
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->autenticar($email, $password,);

        if (is_array($result)) {
            $response = [
                "result" => "success",
                "data" => $result,
                "message" => "",
                "view" => "home"
            ];
        }
        if ($result == 0) {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Faltan datos",
                "view" => "login"
            ];
        }
        if ($result == 1) {
            $response = [
                "result" => "success",
                "data" => "",
                "message" => "Usuario invalido",
                "view" => "login"
            ];
        }
        return $response;
    }
}
