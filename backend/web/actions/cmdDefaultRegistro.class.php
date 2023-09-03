<?php

class cmdDefaultRegistro
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        valid_method($this->default_request_method);

        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "registro"
        ];
        return $response;
    }
}
