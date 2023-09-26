<?php

class cmdDefaultPublicarCategoria
{
    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "categorias/publicarCategorias"
        ];
        return $response;
    }
}
