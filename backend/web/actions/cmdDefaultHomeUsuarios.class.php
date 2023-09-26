<?php

class cmdDefaultHomeUsuarios
{
    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "homeUsuarios"
        ];
        return $response;
    }
}
