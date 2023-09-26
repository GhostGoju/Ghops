<?php

class cmdConsultarCategorias
{
    private $default_request_method = "GET";
    public function execute()
    {
        $u = new usuariosControl();                            //* CREA UN OBJETO DEL CONTROL DE USUARIOS
        $result = $u->listarCategorias();                     //* EJECUTA EL METODO DEL OBJETO (LISTARUSUARIOS)

        valid_method($this->default_request_method);

        $response = [
            "result" => "success",
            "data" => $result,
            "message" => "Listado generado"
        ];
        if (!CALL_API == true)
            $response["view"] = "categorias/listadoCategorias";
        return $response;
    }
}
