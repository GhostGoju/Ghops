<?php

class cmdFAQ
{
    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "FAQ"
        ];
        return $response;
    }
}
