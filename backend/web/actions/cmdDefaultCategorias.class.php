<?php

class cmdDefaultCategorias
{
    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "categorias"
        ];
        return $response;
    }
}
