<?php

class cmdDefaultCarrito
{
    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "carrito"
        ];
        return $response;
    }
}
