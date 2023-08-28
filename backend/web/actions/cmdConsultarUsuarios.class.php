<?php

class cmdConsultarUsuarios
{
    private $default_request_method = "GET";
    public function execute()
    {
        $u = new usuariosControl();                            //* CREA UN OBJETO DEL CONTROL DE USUARIOS
        $result = $u->listarUsurios();                     //* EJECUTA EL METODO DEL OBJETO (LISTARUSUARIOS)

        valid_method($this->default_request_method);

        $response = [
            "result" => "success",
            "data" => $result,
            "message" => "Listado generado"
        ];
        if (!CALL_API == true)
            $response["view"] = "usuarios/index";
            return $response;
    }
}
