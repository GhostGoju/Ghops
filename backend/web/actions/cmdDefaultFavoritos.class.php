<?php

class cmdDefaultFavoritos
{
    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "favoritos"
        ];
        return $response;
    }
}
