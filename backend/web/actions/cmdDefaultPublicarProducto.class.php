<?php

class cmdDefaultPublicarProducto
{
    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "productos/publicarProducto"
        ];
        return $response;
    }
}
