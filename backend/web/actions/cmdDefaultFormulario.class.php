<?php

class cmdDefaultFormulario
{
    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "formularioUsuarios"
        ];
        return $response;
    }
}
