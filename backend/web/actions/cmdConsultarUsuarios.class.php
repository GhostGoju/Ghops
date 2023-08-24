<?php

class cmdConsultarUsuarios
{

    public function execute()
    {
        $u = new usuariosControl();                            //* CREA UN OBJETO DEL CONTROL DE USUARIOS
        $result = $u->listarUsurios();                     //* EJECUTA EL METODO DEL OBJETO (LISTARUSUARIOS)

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
