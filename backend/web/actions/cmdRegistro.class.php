<?php

class cmdRegistro

{
    private $default_request_method = "POST";
    public function execute()                         //* UNICO METODO DE LA CLASE
    {

        valid_method($this->default_request_method);

        extract($_REQUEST);                                           //* LOS DATOS QUE SE NECESITAN PARA EJECUTAR LAS ACCIONES SE EXTRAEN DE REQUEST
        $u = new usuariosControl();
        $result = $u->registroUsuarios($email, $password);             //* RESULT ALMACENA LA INFORMACION QUE TRAIGAN LAS VARIABLES EMAIL AND PASSWORD
        if (is_array($result)) {
            $response = [
                "result" => "success",
                "data" => $result,
                "message" => "Usuario valido",
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
