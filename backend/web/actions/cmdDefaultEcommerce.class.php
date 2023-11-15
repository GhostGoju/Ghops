<?php

class cmdDefaultEcommerce
{
    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "ecommerce"
        ];
        return $response;
    }
}
