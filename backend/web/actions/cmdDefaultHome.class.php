<?php

class cmdDefaultHome
{
    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "home"
        ];
        return $response;
    }
}
